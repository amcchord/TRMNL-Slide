<?php
require_once __DIR__ . "/../api.php";
function verify($condition, $message)
{
    if (!$condition) {
        throw new RuntimeException($message);
    }
}
$calls = [];
$client = new SlideClient("fixture", static function ($url) use (&$calls) {
    $path = parse_url($url, PHP_URL_PATH);
    parse_str(parse_url($url, PHP_URL_QUERY), $query);
    $calls[] = [$path, $query];
    $data = match ($path) {
        "/v1/client" => (int) $query["offset"] === 0
            ? array_fill(0, 50, ["client_id" => "c1"])
            : [["client_id" => "c2"]],
        "/v1/device" => [["device_id" => "d1"]],
        "/v1/agent" => [
            [
                "agent_id" => "a1",
                "device_id" => "outside-device",
                "last_seen_at" => gmdate("c"),
            ],
        ],
        "/v1/backup" => [
            [
                "agent_id" => "a1",
                "started_at" => gmdate("c"),
                "status" => "succeeded",
            ],
            [
                "agent_id" => "a2",
                "started_at" => gmdate("c"),
                "status" => "failed",
            ],
            [
                "agent_id" => "a1",
                "started_at" => gmdate("c", time() - 3 * 86400),
                "status" => "succeeded",
            ],
        ],
        "/v1/alert" => [
            ["agent_id" => "a1", "resolved" => false],
            ["agent_id" => "a1", "resolved" => true],
        ],
        default => [],
    };
    return [200, json_encode(["data" => $data]), null];
});
$api = new SlideAPI("fixture", $client);
verify(
    count($api->getClients()["data"]) === 51,
    "Client picker must include later pages",
);
$stats = $api->getBackupStats("c1");
verify(
    $stats["total_agents"] === 1 && $stats["total_devices"] === 1,
    "Counts must use collection data",
);
verify(
    $stats["successful_backups_24h"] === 1 &&
        $stats["failed_backups_24h"] === 0,
    "Client backups follow agent ownership",
);
verify(
    array_sum(array_column($stats["backup_trends"], "successful")) === 2,
    "Weekly trends must include older backups",
);
verify($stats["active_alerts"] === 1, "Only unresolved alerts are counted");
verify(
    $stats["total_snapshots"] === null,
    "Unknown snapshot total must not become zero",
);
verify(
    !in_array("/v1/snapshot", array_column($calls, 0), true),
    "Avoid per-agent snapshot scans",
);
$bad = new SlideAPI(
    "fixture",
    new SlideClient("fixture", static fn($url) => [401, "{}", null]),
);
try {
    $bad->getBackupStats();
    throw new Exception("Expected API failure");
} catch (RuntimeException $e) {
    verify($e->getCode() === 502, "A failed source must fail the dashboard");
}
echo "PASS: full client list, real totals, client ownership, weekly window, open alerts, bounded reads, and error propagation\n";
