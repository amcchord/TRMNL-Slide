<?php
/**
 * Slide Backup Dashboard JSON Endpoint for TRMNL
 * 
 * This endpoint accepts parameters via:
 * 1. GET parameters: ?api_key=XXX&client_filter=XXX&timezone=EST
 * 2. POST JSON body: {"api_key": "XXX", "client_filter": "XXX", "timezone": "EST"}
 * 
 * Parameters:
 * - api_key (required): Your Slide API key
 * - client_filter (optional): Filter by client name
 * - timezone (optional): EST, CST, MST, or PST (default: EST)
 * 
 * Returns JSON with dashboard data for TRMNL display
 */

// Set headers for JSON output
header('Content-Type: application/json');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Expires: 0');

// Include API helper
require_once 'api.php';

// Initialize parameters
$apiKey = '';
$clientFilter = '';
$userTimezone = 'EST';

// Check if request is POST with JSON body
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get JSON from request body
    $jsonInput = file_get_contents('php://input');
    
    if (!empty($jsonInput)) {
        $postData = json_decode($jsonInput, true);
        
        if (json_last_error() === JSON_ERROR_NONE && is_array($postData)) {
            // Get parameters from JSON POST data
            $apiKey = isset($postData['api_key']) ? trim($postData['api_key']) : '';
            $clientFilter = isset($postData['client_filter']) ? trim($postData['client_filter']) : '';
            $userTimezone = isset($postData['timezone']) ? trim($postData['timezone']) : 'EST';
            
            // Optional: Log POST request for debugging
            // error_log('JSON POST received - API Key: ' . substr($apiKey, 0, 10) . '..., Client: ' . $clientFilter . ', TZ: ' . $userTimezone);
        } else {
            // Invalid JSON received
            $response = [
                'status' => 'error',
                'message' => 'Invalid JSON in POST body',
                'data' => null
            ];
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }
    }
}

// If parameters weren't set via POST, check GET parameters
if (empty($apiKey)) {
    $apiKey = isset($_GET['api_key']) ? trim($_GET['api_key']) : '';
}
if (empty($clientFilter)) {
    $clientFilter = isset($_GET['client_filter']) ? trim($_GET['client_filter']) : '';
}
if ($userTimezone === 'EST' && isset($_GET['timezone'])) {
    $userTimezone = trim($_GET['timezone']);
}

// Map timezone abbreviations to PHP timezone identifiers
$timezoneMap = [
    'EST' => 'America/New_York',
    'CST' => 'America/Chicago',
    'MST' => 'America/Denver',
    'PST' => 'America/Los_Angeles'
];

// Set the timezone for this request
$phpTimezone = $timezoneMap[$userTimezone] ?? 'America/New_York';
date_default_timezone_set($phpTimezone);

// Initialize response
$response = [
    'status' => 'error',
    'message' => 'No API key provided',
    'data' => null
];

if (!empty($apiKey)) {
    try {
        // Initialize API
        $api = new SlideAPI($apiKey);
        
        // Get client ID if filtering
        $clientId = null;
        $clientName = 'All Clients';
        if (!empty($clientFilter)) {
            $clients = $api->getClients();
            if (isset($clients['data'])) {
                foreach ($clients['data'] as $client) {
                    if (stripos($client['name'], $clientFilter) !== false) {
                        $clientId = $client['client_id'];
                        $clientName = $client['name'];
                        break;
                    }
                }
            }
        }
        
        // Get dashboard statistics with timezone
        $stats = $api->getBackupStats($clientId, $phpTimezone);
        
        // Calculate percentages
        $totalBackups24h = $stats['successful_backups_24h'] + $stats['failed_backups_24h'];
        $successRate = $totalBackups24h > 0 ? round(($stats['successful_backups_24h'] / $totalBackups24h) * 100, 1) : 100;
        $storageUsedPercent = $stats['storage_total'] > 0 ? round(($stats['storage_used'] / $stats['storage_total']) * 100, 1) : 0;
        
        // Format current time
        $dt = new DateTime('now', new DateTimeZone($phpTimezone));
        $currentTime = $dt->format('g:i A');
        
        // Prepare response data
        $response = [
            'status' => 'success',
            'message' => 'Data retrieved successfully',
            'data' => [
                // Header stats
                'successful_backups_24h' => $stats['successful_backups_24h'],
                'failed_backups_24h' => $stats['failed_backups_24h'],
                'success_rate' => $successRate,
                'active_alerts' => $stats['active_alerts'],
                
                // System overview
                'total_agents' => $stats['total_agents'],
                'agents_online' => $stats['agents_by_status']['online'] ?? 0,
                'agents_warning' => $stats['agents_by_status']['warning'] ?? 0,
                'agents_offline' => $stats['agents_by_status']['offline'] ?? 0,
                
                'total_devices' => $stats['total_devices'],
                'total_snapshots' => $stats['total_snapshots'],
                
                'storage_used' => $stats['storage_used'],
                'storage_used_formatted' => SlideAPI::formatBytes($stats['storage_used']),
                'storage_total' => $stats['storage_total'],
                'storage_total_formatted' => SlideAPI::formatBytes($stats['storage_total']),
                'storage_used_percent' => $storageUsedPercent,
                
                // Chart data
                'hourly_backups' => $stats['hourly_backups'],
                'backup_trends' => $stats['backup_trends'],
                
                // Alerts
                'recent_alerts' => $stats['recent_alerts'] ?? [],
                
                // Metadata
                'client_name' => $clientName,
                'timezone' => $userTimezone,
                'current_time' => $currentTime,
                'last_updated' => $dt->format('c'), // ISO 8601 format
                
                // Flags for template logic
                'has_alerts' => $stats['active_alerts'] > 0,
                'show_chart' => $stats['active_alerts'] == 0 || empty($stats['recent_alerts'])
            ]
        ];
        
    } catch (Exception $e) {
        $response = [
            'status' => 'error',
            'message' => $e->getMessage(),
            'data' => null
        ];
    }
}

// Output JSON
echo json_encode($response, JSON_PRETTY_PRINT);
