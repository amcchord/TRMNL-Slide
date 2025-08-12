<?php
/**
 * Slide API Helper Class
 * Provides methods for interacting with the Slide backup API
 */
class SlideAPI {
    private $apiKey;
    private $baseUrl = 'https://api.slide.tech/v1';
    private $headers = [];
    
    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
        $this->headers = [
            'Authorization: Bearer ' . $this->apiKey,
            'Content-Type: application/json'
        ];
    }
    
    /**
     * Make API request
     */
    private function request($endpoint, $params = [], $method = 'GET') {
        $url = $this->baseUrl . $endpoint;
        
        if ($method === 'GET' && !empty($params)) {
            $url .= '?' . http_build_query($params);
        }
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        }
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            throw new Exception('API Request failed: ' . $error);
        }
        
        $data = json_decode($response, true);
        
        if ($httpCode >= 400) {
            $errorMessage = isset($data['message']) ? $data['message'] : 'API request failed';
            throw new Exception('API Error (' . $httpCode . '): ' . $errorMessage);
        }
        
        return $data;
    }
    
    /**
     * Get list of clients
     */
    public function getClients($limit = 50, $offset = 0) {
        return $this->request('/client', [
            'limit' => $limit,
            'offset' => $offset,
            'sort_by' => 'id',
            'sort_asc' => true
        ]);
    }
    
    /**
     * Get list of devices
     */
    public function getDevices($clientId = null, $limit = 50, $offset = 0) {
        $params = [
            'limit' => $limit,
            'offset' => $offset,
            'sort_by' => 'hostname',
            'sort_asc' => true
        ];
        
        if ($clientId) {
            $params['client_id'] = $clientId;
        }
        
        return $this->request('/device', $params);
    }
    
    /**
     * Get list of agents
     */
    public function getAgents($clientId = null, $deviceId = null, $limit = 50, $offset = 0) {
        $params = [
            'limit' => $limit,
            'offset' => $offset,
            'sort_by' => 'hostname',
            'sort_asc' => true
        ];
        
        if ($clientId) {
            $params['client_id'] = $clientId;
        }
        
        if ($deviceId) {
            $params['device_id'] = $deviceId;
        }
        
        return $this->request('/agent', $params);
    }
    
    /**
     * Get list of backups
     */
    public function getBackups($agentId = null, $deviceId = null, $limit = 50, $offset = 0) {
        $params = [
            'limit' => $limit,
            'offset' => $offset,
            'sort_by' => 'start_time',
            'sort_asc' => false
        ];
        
        if ($agentId) {
            $params['agent_id'] = $agentId;
        }
        
        if ($deviceId) {
            $params['device_id'] = $deviceId;
        }
        
        return $this->request('/backup', $params);
    }
    
    /**
     * Get list of snapshots
     */
    public function getSnapshots($agentId = null, $limit = 50, $offset = 0) {
        $params = [
            'limit' => $limit,
            'offset' => $offset,
            'sort_by' => 'backup_start_time',
            'sort_asc' => false
        ];
        
        if ($agentId) {
            $params['agent_id'] = $agentId;
        }
        
        return $this->request('/snapshot', $params);
    }
    
    /**
     * Get list of alerts
     */
    public function getAlerts($deviceId = null, $agentId = null, $resolved = null, $limit = 50, $offset = 0) {
        $params = [
            'limit' => $limit,
            'offset' => $offset,
            'sort_by' => 'created',
            'sort_asc' => false
        ];
        
        if ($deviceId) {
            $params['device_id'] = $deviceId;
        }
        
        if ($agentId) {
            $params['agent_id'] = $agentId;
        }
        
        if ($resolved !== null) {
            $params['resolved'] = $resolved;
        }
        
        return $this->request('/alert', $params);
    }
    
    /**
     * Get backup statistics for dashboard
     */
    public function getBackupStats($clientId = null, $timezone = 'America/New_York') {
        $stats = [
            'total_agents' => 0,
            'total_devices' => 0,
            'successful_backups_24h' => 0,
            'failed_backups_24h' => 0,
            'pending_backups' => 0,
            'total_snapshots' => 0,
            'active_alerts' => 0,
            'agents_by_status' => [],
            'backup_trends' => [],
            'hourly_backups' => [],
            'storage_used' => 0,
            'storage_total' => 0,
            'total_backups_fetched' => 0
        ];
        
        try {
            // Get devices
            $devices = $this->getDevices($clientId);
            $stats['total_devices'] = $devices['pagination']['total'] ?? 0;
            
            // Calculate storage
            if (isset($devices['data'])) {
                foreach ($devices['data'] as $device) {
                    $stats['storage_used'] += $device['storage_used_bytes'] ?? 0;
                    $stats['storage_total'] += $device['storage_total_bytes'] ?? 0;
                }
            }
            
            // Get agents
            $agents = $this->getAgents($clientId);
            $stats['total_agents'] = $agents['pagination']['total'] ?? 0;
            
            // Get recent backups (last 24 hours)
            // Need to fetch enough backups to cover 24 hours - may be more than 50
            $now = time();
            $dayAgo = $now - (24 * 60 * 60);
            $weekAgo = $now - (7 * 24 * 60 * 60);
            
            // Fetch backups in batches until we get all from last 24 hours
            $allBackups = [];
            
            // If we have a client filter, we need to fetch backups for each of their devices
            if ($clientId && isset($devices['data'])) {
                foreach ($devices['data'] as $device) {
                    $deviceId = $device['device_id'];
                    $offset = 0;
                    $limit = 50;
                    $keepFetching = true;
                    
                    while ($keepFetching) {
                        $backupBatch = $this->getBackups(null, $deviceId, $limit, $offset);
                        
                        if (isset($backupBatch['data']) && count($backupBatch['data']) > 0) {
                            foreach ($backupBatch['data'] as $backup) {
                                $backupTime = strtotime($backup['started_at']);
                                
                                // Only add backups from last 24 hours
                                if ($backupTime >= $dayAgo) {
                                    $allBackups[] = $backup;
                                } else {
                                    // If this backup is older than 24 hours, stop fetching for this device
                                    $keepFetching = false;
                                    break;
                                }
                            }
                            
                            // If we got fewer results than the limit, we've reached the end
                            if (count($backupBatch['data']) < $limit) {
                                $keepFetching = false;
                            }
                            
                            $offset += $limit;
                            
                            // Safety limit to prevent infinite loops
                            if ($offset >= 500) {
                                $keepFetching = false;
                            }
                        } else {
                            $keepFetching = false;
                        }
                    }
                }
            } else {
                // No client filter - fetch all backups
                $offset = 0;
                $limit = 50;
                $keepFetching = true;
                
                while ($keepFetching) {
                    $backupBatch = $this->getBackups(null, null, $limit, $offset);
                    
                    if (isset($backupBatch['data']) && count($backupBatch['data']) > 0) {
                        foreach ($backupBatch['data'] as $backup) {
                            $backupTime = strtotime($backup['started_at']);
                            
                            // Add backup to our collection
                            $allBackups[] = $backup;
                            
                            // If this backup is older than 24 hours, we can stop fetching
                            if ($backupTime < $dayAgo) {
                                $keepFetching = false;
                                break;
                            }
                        }
                        
                        // If we got fewer results than the limit, we've reached the end
                        if (count($backupBatch['data']) < $limit) {
                            $keepFetching = false;
                        }
                        
                        $offset += $limit;
                        
                        // Safety limit to prevent infinite loops - max 1000 backups
                        if ($offset >= 1000) {
                            $keepFetching = false;
                            error_log('Warning: Reached 1000 backup limit in getBackupStats');
                        }
                    } else {
                        $keepFetching = false;
                    }
                }
            }
            
            $backups = ['data' => $allBackups];
            
            // Track how many backups we fetched
            $totalBackupsFetched = count($allBackups);
            $stats['total_backups_fetched'] = $totalBackupsFetched;
            
            if ($totalBackupsFetched > 100) {
                error_log("Fetched $totalBackupsFetched backups for stats calculation");
            }
            
            // Set timezone for date calculations
            $oldTz = date_default_timezone_get();
            date_default_timezone_set($timezone);
            
            // Initialize hourly counts for the last 24 hours
            $hourlyCounts = [];
            for ($i = 23; $i >= 0; $i--) {
                $hour = date('Y-m-d H:00', $now - ($i * 3600));
                $hourlyCounts[$hour] = 0;
            }
            
            // Restore original timezone
            date_default_timezone_set($oldTz);
            
            // Initialize daily counts for trend
            $dailyCounts = [];
            for ($i = 6; $i >= 0; $i--) {
                $dt = new DateTime('@' . ($now - ($i * 24 * 60 * 60)));
                $dt->setTimezone(new DateTimeZone($timezone));
                $date = $dt->format('Y-m-d');
                $dailyCounts[$date] = ['successful' => 0, 'failed' => 0];
            }
            
            if (isset($backups['data'])) {
                foreach ($backups['data'] as $backup) {
                    $startTime = strtotime($backup['started_at']);
                    
                    // Convert to user's timezone for display
                    $backupDt = new DateTime('@' . $startTime);
                    $backupDt->setTimezone(new DateTimeZone($timezone));
                    $backupDate = $backupDt->format('Y-m-d');
                    $backupHour = $backupDt->format('Y-m-d H:00');
                    
                    // Count hourly backups for last 24 hours
                    if ($startTime >= $dayAgo && isset($hourlyCounts[$backupHour])) {
                        if ($backup['status'] === 'succeeded') {
                            $hourlyCounts[$backupHour]++;
                        }
                    }
                    
                    // Count backups in last 24 hours
                    if ($startTime >= $dayAgo) {
                        if ($backup['status'] === 'succeeded') {
                            $stats['successful_backups_24h']++;
                        } elseif (in_array($backup['status'], ['failed', 'canceled'])) {
                            $stats['failed_backups_24h']++;
                        } elseif (in_array($backup['status'], ['created', 'pending', 'started'])) {
                            $stats['pending_backups']++;
                        }
                    }
                    
                    // Count for weekly trend
                    if ($startTime >= $weekAgo && isset($dailyCounts[$backupDate])) {
                        if ($backup['status'] === 'succeeded') {
                            $dailyCounts[$backupDate]['successful']++;
                        } elseif (in_array($backup['status'], ['failed', 'canceled'])) {
                            $dailyCounts[$backupDate]['failed']++;
                        }
                    }
                }
            }
            
            // Format backup trends for chart
            foreach ($dailyCounts as $date => $counts) {
                $stats['backup_trends'][] = [
                    'date' => $date,
                    'successful' => $counts['successful'],
                    'failed' => $counts['failed']
                ];
            }
            
            // Format hourly backups for chart
            foreach ($hourlyCounts as $hour => $count) {
                $stats['hourly_backups'][] = [
                    'hour' => $hour,
                    'count' => $count
                ];
            }
            
            // Get snapshots count - filter by client's agents if clientId is set
            if ($clientId && isset($agents['data'])) {
                $totalSnapshots = 0;
                foreach ($agents['data'] as $agent) {
                    $agentSnapshots = $this->getSnapshots($agent['agent_id'], 1, 0);
                    $totalSnapshots += $agentSnapshots['pagination']['total'] ?? 0;
                }
                $stats['total_snapshots'] = $totalSnapshots;
            } else {
                // No client filter - get all snapshots
                $snapshots = $this->getSnapshots();
                $stats['total_snapshots'] = $snapshots['pagination']['total'] ?? 0;
            }
            
            // Get active alerts - filter by client's devices if clientId is set
            $allAlerts = [];
            $totalAlerts = 0;
            
            if ($clientId && isset($devices['data'])) {
                // Get alerts for each device belonging to this client
                foreach ($devices['data'] as $device) {
                    $deviceAlerts = $this->getAlerts($device['device_id'], null, false, 50);
                    if (isset($deviceAlerts['data'])) {
                        $allAlerts = array_merge($allAlerts, $deviceAlerts['data']);
                    }
                    $totalAlerts += $deviceAlerts['pagination']['total'] ?? 0;
                }
                $stats['active_alerts'] = count($allAlerts); // Use actual count since we may have duplicates
            } else {
                // No client filter - get all alerts
                $alerts = $this->getAlerts(null, null, false, 10);
                $allAlerts = $alerts['data'] ?? [];
                $stats['active_alerts'] = $alerts['pagination']['total'] ?? 0;
            }
            
            // Get newest unresolved alerts with details
            $stats['recent_alerts'] = [];
            if (!empty($allAlerts) && is_array($allAlerts)) {
                $alerts = ['data' => $allAlerts];
                // Sort by created_at to get the newest first
                usort($alerts['data'], function($a, $b) {
                    $timeA = strtotime($a['created_at'] ?? '0');
                    $timeB = strtotime($b['created_at'] ?? '0');
                    return $timeB - $timeA; // Newest first
                });
                
                // Process up to 2 most recent alerts
                $alertsToShow = array_slice($alerts['data'], 0, 2);
                foreach ($alertsToShow as $alert) {
                    $alertInfo = [];
                    $alertInfo['id'] = $alert['alert_id'] ?? '';
                    $alertInfo['type'] = $alert['alert_type'] ?? '';
                    $alertInfo['created_at'] = $alert['created_at'] ?? '';
                    
                    // Parse alert_fields JSON if it exists
                    $fields = [];
                    if (!empty($alert['alert_fields'])) {
                        $fields = json_decode($alert['alert_fields'], true) ?? [];
                    }
                    
                    // Format alert message based on type
                    $alertInfo['title'] = $this->formatAlertTitle($alert['alert_type']);
                    $alertInfo['message'] = $this->formatAlertMessage($alert['alert_type'], $fields);
                    
                    // Extract relevant metadata
                    $alertInfo['device_name'] = $fields['device']['name'] ?? 'Unknown Device';
                    $alertInfo['device_hostname'] = $fields['device']['hostname'] ?? '';
                    $alertInfo['agent_name'] = $fields['agent']['name'] ?? '';
                    $alertInfo['agent_hostname'] = $fields['agent']['hostname'] ?? '';
                    
                    // Format time ago
                    $alertInfo['time_ago'] = $this->formatTimeAgo($alert['created_at']);
                    
                    $stats['recent_alerts'][] = $alertInfo;
                }
            }
            
            // Categorize agents by last seen status
            if (isset($agents['data'])) {
                $hourAgo = $now - 3600;
                $dayAgo = $now - (24 * 60 * 60);
                
                $stats['agents_by_status'] = [
                    'online' => 0,
                    'warning' => 0,
                    'offline' => 0
                ];
                
                foreach ($agents['data'] as $agent) {
                    $lastSeen = strtotime($agent['last_seen_at']);
                    if ($lastSeen >= $hourAgo) {
                        $stats['agents_by_status']['online']++;
                    } elseif ($lastSeen >= $dayAgo) {
                        $stats['agents_by_status']['warning']++;
                    } else {
                        $stats['agents_by_status']['offline']++;
                    }
                }
            }
            
        } catch (Exception $e) {
            // Log error but return partial stats
            error_log('Error getting backup stats: ' . $e->getMessage());
        }
        
        return $stats;
    }
    
    /**
     * Format bytes to human readable
     */
    public static function formatBytes($bytes, $precision = 2) {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        
        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, $precision) . ' ' . $units[$i];
    }
    
    /**
     * Format time ago
     */
    public static function timeAgo($datetime) {
        $timestamp = strtotime($datetime);
        $diff = time() - $timestamp;
        
        if ($diff < 60) {
            return 'just now';
        } elseif ($diff < 3600) {
            $mins = floor($diff / 60);
            return $mins . ' min' . ($mins > 1 ? 's' : '') . ' ago';
        } elseif ($diff < 86400) {
            $hours = floor($diff / 3600);
            return $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ago';
        } else {
            $days = floor($diff / 86400);
            if ($days <= 7) {
                return $days . ' day' . ($days > 1 ? 's' : '') . ' ago';
            } else {
                return date('M j, Y', $timestamp);
            }
        }
    }
    
    /**
     * Format alert type to human readable title
     */
    private function formatAlertTitle($alertType) {
        $titles = [
            'agent_not_checking_in' => 'Agent Not Checking In',
            'agent_backup_failed' => 'Backup Failed',
            'agent_not_backing_up' => 'Agent Not Backing Up',
            'device_not_checking_in' => 'Device Not Checking In',
            'storage_error' => 'Storage Error',
            'storage_warning' => 'Storage Warning'
        ];
        
        return $titles[$alertType] ?? ucwords(str_replace('_', ' ', $alertType));
    }
    
    /**
     * Format alert message based on type and fields
     */
    private function formatAlertMessage($alertType, $fields) {
        switch ($alertType) {
            case 'agent_not_checking_in':
                $agent = $fields['agent']['name'] ?? 'Unknown agent';
                $notSeenSince = $fields['not_seen_since']['seconds'] ?? 0;
                $hours = round($notSeenSince / 3600);
                return "Agent '{$agent}' has not checked in for {$hours} hours";
                
            case 'agent_backup_failed':
                $agent = $fields['agent']['name'] ?? 'Unknown agent';
                $errorMsg = $fields['backup_error_message'] ?? 'Unknown error';
                $errorCode = $fields['backup_error_code'] ?? '';
                return "Backup failed for agent '{$agent}': {$errorMsg}" . ($errorCode ? " (Code: {$errorCode})" : "");
                
            case 'agent_not_backing_up':
                $agent = $fields['agent']['name'] ?? 'Unknown agent';
                $overdueSince = $fields['expected_successful_backup_overdue_since']['seconds'] ?? 0;
                $hours = round($overdueSince / 3600);
                return "Agent '{$agent}' has not completed a backup in {$hours} hours";
                
            case 'device_not_checking_in':
                $device = $fields['device']['name'] ?? 'Unknown device';
                $notSeenSince = $fields['not_seen_since']['seconds'] ?? 0;
                $hours = round($notSeenSince / 3600);
                return "Device '{$device}' has not checked in for {$hours} hours";
                
            default:
                return "Alert triggered for " . ($fields['agent']['name'] ?? $fields['device']['name'] ?? 'system');
        }
    }
    
    /**
     * Format time ago string - wrapper for static method
     */
    private function formatTimeAgo($timestamp) {
        return self::timeAgo($timestamp);
    }
}
