<?php
$endpointFixture = ($argv[1] ?? '') === '--endpoints';
require_once $endpointFixture ? $argv[2] . '/trmnl/RecipesConnection.php' : __DIR__ . '/../RecipesConnection.php';
$checks = 0;
function checkConnection($condition, $message): void
{
    global $checks;
    if (!$condition) throw new RuntimeException($message);
    $checks++;
}
$fixtureCookie = base64_encode(str_repeat('a', 48));
$demo = 'tk_fixture_demo_account';
$other = 'tk_fixture_other_account';
$decrypt = static fn($cookie) => $demo;
if (!$endpointFixture) {
    checkConnection(trmnlConnection([], [], [], $decrypt)['source'] === '', 'Absent cookie stays disconnected');
    checkConnection(trmnlConnection([], [], ['api_key' => $fixtureCookie], $decrypt)['key'] === $demo, 'Saved Recipes connection is reused');
    checkConnection(trmnlConnection([], [], ['api_key' => $fixtureCookie], static fn($c) => $other)['key'] === $other, 'Account switch uses current cookie');
    checkConnection(trmnlConnection([], [], [], $decrypt)['key'] === '', 'Sign-out does not retain a prior key');
    checkConnection(trmnlConnection(['api_key' => $other], [], ['api_key' => $fixtureCookie], $decrypt)['key'] === $other, 'Explicit JSON/form key retains precedence');
    checkConnection(trmnlConnection([], ['api_key' => $other], ['api_key' => $fixtureCookie], $decrypt)['key'] === $other, 'Legacy device query key remains compatible');
    foreach (['', 'bad-cookie', [], str_repeat('a', 4097), base64_encode('short')] as $cookie) {
        checkConnection(trmnlRecipesKey(['api_key' => $cookie], static function () { throw new RuntimeException('Must not decrypt malformed input'); }) === '', 'Malformed cookie falls back without throwing');
    }
    foreach ([false, '', 'not-a-slide-key', "tk_fixture\n", []] as $plaintext) {
        checkConnection(trmnlRecipesKey(['api_key' => $fixtureCookie], static fn($c) => $plaintext) === '', 'Invalid decrypted key is rejected');
    }
    checkConnection(trmnlRecipesKey(['api_key' => $fixtureCookie], static function () { throw new RuntimeException('Private failure'); }) === '', 'Decryption exceptions fail closed');
    checkConnection(trmnlInput(['api_key' => []], 'api_key') === '', 'Array-valued inputs do not crash');

    // Exercise the real setup/preview and JSON files against a private test-only
    // Recipes cookie helper. The fake Slide API records the selected key and fails
    // before any network call; the response must never disclose that key.
    $root = sys_get_temp_dir() . '/trmnl-connection-' . bin2hex(random_bytes(6));
    mkdir($root, 0700);
    mkdir($root . '/trmnl', 0700);
    mkdir($root . '/include', 0700);
    foreach (['index.php', 'json.php', 'RecipesConnection.php', 'setup.css'] as $file) {
        copy(__DIR__ . '/../' . $file, $root . '/trmnl/' . $file);
    }
    file_put_contents($root . '/trmnl/api.php', <<<'STUB'
    <?php
    class SlideAPI {
        public function __construct($key) {
            $GLOBALS['preview_key'] = $key;
            throw new RuntimeException('Fixture preview loaded');
        }
    }
    STUB);
    file_put_contents($root . '/include/encryption.php', <<<'STUB'
    <?php
    function decryptData($cookie) { return $GLOBALS['fixture_key']; }
    STUB);
    try {
        // A fresh PHP process exercises the unmodified production endpoints and
        // actual relative include path, isolated from this process's unit helpers.
        $command = escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg(__FILE__) . ' --endpoints ' . escapeshellarg($root);
        exec($command, $output, $status);
        checkConnection($status === 0, 'Endpoint fixture subprocess must pass');
        echo "PASS: $checks connection resolver checks\n" . implode("\n", $output) . "\n";
    } finally {
        foreach (glob($root . '/trmnl/*') as $file) unlink($file);
        foreach (glob($root . '/include/*') as $file) unlink($file);
        rmdir($root . '/trmnl'); rmdir($root . '/include'); rmdir($root);
    }
    exit;
}
$root = $argv[2];
$GLOBALS['fixture_key'] = $demo;
function renderConnectionFixture(string $path, array $post = [], array $query = [], array $cookies = []): string
{
    $_POST = $post; $_GET = $query; $_COOKIE = $cookies;
    $_SERVER['REQUEST_METHOD'] = $post ? 'POST' : 'GET';
    unset($GLOBALS['preview_key']);
    ob_start();
    include $path;
    return ob_get_clean();
}
$cwd = getcwd();
try {
    chdir($root . '/trmnl');
    $connected = renderConnectionFixture('index.php', [], [], ['api_key' => $fixtureCookie]);
    checkConnection(str_contains($connected, 'Connected through Recipes'), 'Setup shows connected status');
    checkConnection(!str_contains($connected, 'id="trmnl-key"'), 'Connected setup does not ask for the key');
    checkConnection(!str_contains($connected, $demo) && !str_contains($connected, $fixtureCookie), 'HTML includes neither plaintext key nor ciphertext');
    checkConnection(str_contains($connected, 'name="client_filter"') && str_contains($connected, 'Preview display'), 'Filter and preview remain available');
    checkConnection(!isset($GLOBALS['preview_key']), 'Setup does not fetch the fleet until preview');
    $preview = renderConnectionFixture('index.php', ['preview' => '1', 'client_filter' => 'Brawndo'], [], ['api_key' => $fixtureCookie]);
    checkConnection(($GLOBALS['preview_key'] ?? null) === $demo && !str_contains($preview, $demo), 'Preview uses server-side connection without exposing it');
    $GLOBALS['fixture_key'] = $other;
    renderConnectionFixture('index.php', ['preview' => '1'], [], ['api_key' => $fixtureCookie]);
    checkConnection(($GLOBALS['preview_key'] ?? null) === $other, 'A previously opened preview uses the newly connected account');
    $signedOut = renderConnectionFixture('index.php', ['preview' => '1']);
    checkConnection(str_contains($signedOut, 'id="trmnl-key"') && !isset($GLOBALS['preview_key']), 'Sign-out removes preview access and restores standalone setup');
    renderConnectionFixture('index.php', ['api_key' => $demo]);
    checkConnection(($GLOBALS['preview_key'] ?? null) === $demo, 'Standalone form preview remains available');
    $json = renderConnectionFixture('json.php', [], [], ['api_key' => $fixtureCookie]);
    checkConnection(($GLOBALS['preview_key'] ?? null) === $other && !str_contains($json, $other), 'Browser JSON endpoint reuses current connection without echoing key');
    $json = renderConnectionFixture('json.php');
    checkConnection(!isset($GLOBALS['preview_key']) && json_decode($json, true)['message'] === 'No API key provided', 'JSON without a cookie or explicit key stays disconnected');
    renderConnectionFixture('json.php', [], ['api_key' => $demo], ['api_key' => $fixtureCookie]);
    checkConnection(($GLOBALS['preview_key'] ?? null) === $demo, 'Explicit plugin key wins on JSON endpoint');
} finally {
    chdir($cwd);
}
echo "PASS: $checks endpoint, account-change, sign-out, standalone, and credential-containment checks\n";
