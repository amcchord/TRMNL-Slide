<?php
/** Reuse the Recipes root cookie without copying credentials into TRMNL. */
function trmnlInput(array $values, string $name, string $default = ''): string
{
    return isset($values[$name]) && is_string($values[$name])
        ? trim($values[$name]) : $default;
}

function trmnlRecipesKey(array $cookies, ?callable $decrypt = null): string
{
    $cookie = $cookies['api_key'] ?? null;
    if (!is_string($cookie) || $cookie === '' || strlen($cookie) > 4096) {
        return '';
    }
    // Reject malformed ciphertext before invoking the existing Recipes helper.
    $decoded = base64_decode($cookie, true);
    if ($decoded === false || strlen($decoded) < 32 || strlen($decoded) % 16 !== 0) {
        return '';
    }
    try {
        if ($decrypt === null) {
            $helper = dirname(__DIR__) . '/include/encryption.php';
            // A standalone TRMNL installation still accepts its own supplied key.
            if (!is_readable($helper)) {
                return '';
            }
            require_once $helper;
            $decrypt = 'decryptData';
        }
        $key = $decrypt($cookie);
        return is_string($key) && preg_match('/^tk_[A-Za-z0-9_]{7,296}$/D', $key)
            ? $key : '';
    } catch (Throwable $error) {
        // Treat an expired/unreadable connection as signed out. Never log credentials.
        return '';
    }
}

function trmnlConnection(array $submitted, array $query, array $cookies, ?callable $decrypt = null): array
{
    // Explicit integration credentials retain priority; browser forms never embed
    // the shared key. Resolve the root cookie afresh after account changes/sign-out.
    $key = trmnlInput($submitted, 'api_key') ?: trmnlInput($query, 'api_key');
    if ($key !== '') {
        return ['key' => $key, 'source' => 'explicit'];
    }
    $key = trmnlRecipesKey($cookies, $decrypt);
    return ['key' => $key, 'source' => $key !== '' ? 'recipes' : ''];
}
