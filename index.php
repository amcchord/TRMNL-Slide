<?php
// Set headers to prevent caching
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Expires: 0');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log('POST data: ' . print_r($_POST, true));
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Backup Dashboard - TRMNL</title>
    
    <!-- TRMNL Framework CSS and JS -->
    <link rel="stylesheet" href="https://usetrmnl.com/css/latest/plugins.css">
    <script src="https://usetrmnl.com/js/latest/plugins.js"></script>
    
    <!-- Google Fonts for TRMNL -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;350;375;400;450;600;700&display=swap" rel="stylesheet">
    
    <!-- Highcharts for charts -->
    <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts.js"></script>
    <script src="https://usetrmnl.com/js/highcharts/12.3.0/highcharts-more.js"></script>
    <script src="https://usetrmnl.com/js/highcharts/12.3.0/pattern-fill.js"></script>
    
    <style>
        /* Custom styles only for elements not in TRMNL framework */
        
        /* Form styles */
        .config-form {
            background: var(--gray-1);
            padding: 20px;
            border-bottom: 2px solid var(--black);
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--gray-3);
            background: var(--white);
            font-size: 14px;
            font-family: monospace;
        }
        
        .form-group button {
            padding: 10px 20px;
            background: var(--black);
            color: var(--white);
            border: none;
            font-weight: 500;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .form-group button:hover {
            background: var(--gray-8);
        }
        
        .error-message {
            background: #fee;
            border: 1px solid #fcc;
            padding: 10px;
            margin: 10px 0;
            color: #c00;
        }
        

        
        /* Chart container */
        .chart-container {
            background: var(--white);
            border: 1px solid var(--gray-3);
            padding: 15px;
            margin: 15px 0;
        } */
        
        /* Inverted style for multiple alerts */
        .stat-card--inverted {
            background: var(--black) !important;
            color: var(--white) !important;
        }
        
        .stat-card--inverted .value,
        .stat-card--inverted .label {
            color: var(--white) !important;
        }
        
        /* Alert display container */
        .alerts-container {
            margin: 15px 0;
        }
        
        .alerts-container .item + .item {
            margin-top: 10px;
        }
        
        /* Fix for title_bar positioning */
        .title_bar {
            margin-top: auto;
        }

        .rounded--medium {
            border-radius: 10px;
        }
    </style>
</head>
<body class="environment trmnl">
    <div class="screen">
        <?php
        // Include API helper
        require_once 'api.php';
        
        // Get form parameters
        $apiKey = isset($_POST['api_key']) ? trim($_POST['api_key']) : (isset($_GET['api_key']) ? trim($_GET['api_key']) : '');
        $clientFilter = isset($_POST['client_filter']) ? trim($_POST['client_filter']) : (isset($_GET['client_filter']) ? trim($_GET['client_filter']) : '');
        $userTimezone = isset($_POST['timezone']) ? trim($_POST['timezone']) : (isset($_GET['timezone']) ? trim($_GET['timezone']) : 'EST');
        
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
        
        // Show configuration form if no API key
        if (empty($apiKey)) {
            ?>
            <div class="view view--full">
                <div class="layout">
                        <h1 class="title">Slide Backup Dashboard Requires and API Key</h1>
                </div>
            </div>
            <?php
        } else {
            // Log API key, timezone, and HTTP response code to the PHP error log
if (isset($apiKey) && isset($userTimezone)) {
    // Try to get the last HTTP response code if available
    $httpResponseCode = null;
    if (isset($httpCode)) {
        $httpResponseCode = $httpCode;
    } elseif (function_exists('http_response_code')) {
        $httpResponseCode = http_response_code();
    }
    $logMessage = 'Slide Dashboard - API Key: ' . $apiKey . ', Timezone: ' . $userTimezone . ', HTTP Response Code: ' . (is_null($httpResponseCode) ? 'N/A' : $httpResponseCode);
    error_log($logMessage);
}
            try {
                // Initialize API
                $api = new SlideAPI($apiKey);
                
                // Get client ID if filtering
                $clientId = null;
                if (!empty($clientFilter)) {
                    $clients = $api->getClients();
                    if (isset($clients['data'])) {
                        foreach ($clients['data'] as $client) {
                            if (stripos($client['name'], $clientFilter) !== false) {
                                $clientId = $client['client_id'];
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
                
                ?>
                <div class="view view--full">
                    <div class="layout">
                        <div class="columns">
                            <div class="column">
                        <!-- Header Stats -->
                        <div class="grid grid--cols-4 gap--medium mb--large ">
                            <div class="stat-card rounded--medium">
                                <div class="content text--center">
                                    <span class="value value--large value--tnums"><?php echo $stats['successful_backups_24h']; ?></span>
                                    <span class="label">Successful (24h)</span>
                                </div>
                            </div>
                            <div class="stat-card rounded--medium">
                                <div class="content text--center">
                                    <span class="value value--large value--tnums"><?php echo $stats['failed_backups_24h']; ?></span>
                                    <span class="label">Failed (24h)</span>
                                </div>
                            </div>
                            <div class="stat-card rounded--medium ">
                                <div class="content text--center">
                                    <span class="value value--large value--tnums "><?php echo $successRate; ?>%</span>
                                    <span class="label">Success Rate</span>
                                </div>
                            </div>
                            <div class="stat-card rounded--medium <?php echo $stats['active_alerts'] > 0 ? 'bg-black text--white rounded--medium' : ''; ?>">
                                <div class="content text--center">
                                    <span class="value value--large value--tnums"><?php echo $stats['active_alerts']; ?></span>
                                    <span class="label <?php echo $stats['active_alerts'] > 0 ? 'text--white' : ''; ?>">Active Alerts</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border--h-3"></div>                        
                        <!-- System Overview -->
                        <div class="grid grid--cols-3 gap--medium">
                            <div class="item rounded--medium ">
                                <div class="meta"></div>
                                <div class="content">
                                    <span class="value value--tnums"><?php echo $stats['total_agents']; ?></span>
                                    <span class="label">Total Agents</span>
                                    <div class="mt--5">
                                        <span class="description">
                                            Online: <?php echo $stats['agents_by_status']['online'] ?? 0; ?> | 
                                            Warning: <?php echo $stats['agents_by_status']['warning'] ?? 0; ?> | 
                                            Offline: <?php echo $stats['agents_by_status']['offline'] ?? 0; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="item rounded--medium ">
                                <div class="meta"></div>
                                <div class="content">
                                    <span class="value value--tnums"><?php echo $stats['total_devices']; ?></span>
                                    <span class="label">Total Devices</span>
                                    <div class="mt--5">
                                        <span class="description"><?php echo $stats['total_snapshots']; ?> snapshots stored</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item rounded--medium ">
                                <div class="meta"></div>
                                <div class="content">
                                    <span class="value value--tnums"><?php echo SlideAPI::formatBytes($stats['storage_used']); ?></span>
                                    <span class="label">Storage Used</span>
                                    <div class="mt--5">
                                        <span class="description">
                                            <?php echo $storageUsedPercent; ?>% of <?php echo SlideAPI::formatBytes($stats['storage_total']); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 24-Hour Backup Activity Chart OR Alert Display -->
                        <div class="mt--large">
                            <div class="border--h-3"></div>
                            <?php if ($stats['active_alerts'] > 0 && !empty($stats['recent_alerts'])): ?>
                                <!-- Show recent alerts when there are active alerts -->
                                <h3 class="title title--small mt--4 mb--small">Current Alerts</h3>
                                <div class="alerts-container">
                                    <?php foreach ($stats['recent_alerts'] as $index => $alert): ?>
                                        <div class="item <?php echo $index === 0 ? 'item--emphasis-3' : 'item--emphasis-2'; ?>">
                                            <div class="meta"></div>
                                            <div class="content">
                                                <span class="title title--small"><?php echo htmlspecialchars($alert['title']); ?></span>
                                                <span class="description"><?php echo htmlspecialchars($alert['message']); ?></span>
                                                <div class="flex gap--small mt--small">
                                                    <?php if (!empty($alert['device_name'])): ?>
                                                        <span class="label label--small label--underline">Device: <?php echo htmlspecialchars($alert['device_name']); ?></span>
                                                    <?php endif; ?>
                                                    <?php if (!empty($alert['agent_hostname'])): ?>
                                                        <span class="label label--small label--underline">Agent: <?php echo htmlspecialchars($alert['agent_hostname']); ?></span>
                                                    <?php endif; ?>
                                                    <span class="label label--small label--underline"><?php echo htmlspecialchars($alert['time_ago']); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <!-- Show chart when no active alerts -->
                                <h3 class="title title--small mt--4 mb--small">24-Hour Backup Activity</h3>
                                <div id="hourly-chart" style="width: 100%;"></div>
                            <?php endif; ?>
                        </div>
                        
                       
                            </div>
                        </div>
                    </div>
                    
                    <div class="title_bar">
                        <span class="title">Slide Backups</span>
                        <?php if (!empty($clientFilter)): ?>
                            <span class="instance"><?php echo htmlspecialchars($clientFilter); ?></span>
                        <?php else: ?>
                            <span class="instance">All Clients</span>
                        <?php endif; ?>
                        <span class="instance">
                            <?php
                                $dt = new DateTime('now', new DateTimeZone($phpTimezone));
                                echo $dt->format('g:i A') . ' ' . $userTimezone;
                            ?>
                        </span>
                    </div>
                </div>
                
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    <?php if ($stats['active_alerts'] == 0 || empty($stats['recent_alerts'])): ?>
                    // Only create chart if no active alerts
                    // Prepare hourly data for 24-hour chart
                    var hourlyData = <?php echo json_encode($stats['hourly_backups']); ?>;
                    // Debug: Total backups fetched from API: <?php echo $stats['total_backups_fetched']; ?>
                   
                   
                    var hourlyChartData = [];
                    
                    // Process the data
                    if (hourlyData && hourlyData.length > 0) {
                        hourlyData.forEach(function(item) {
                            // Parse the date string properly
                            var dateParts = item.hour.split(' ');
                            var dateStr = dateParts[0] + 'T' + dateParts[1] + ':00';
                            var timestamp = new Date(dateStr).getTime();
                            hourlyChartData.push([timestamp, parseInt(item.count) || 0]);
                        });
                    }
                    
                    // Sort by timestamp
                    hourlyChartData.sort(function(a, b) { return a[0] - b[0]; });
                    
                    // Create 24-hour activity chart using TRMNL framework formatting
                    Highcharts.chart('hourly-chart', {
                        chart: {
                            type: 'spline',
                            animation: false,
                            backgroundColor: 'transparent',
                            height: 160,
                            spacing: [10, 10, 5, 10]
                        },
                        title: { text: null },
                        plotOptions: {
                            series: {
                                animation: false,
                                lineWidth: 4,
                                marker: {
                                    enabled: false
                                },
                                color: 'black',
                                states: {
                                    hover: {
                                        enabled: false
                                    }
                                },
                                enableMouseTracking: false
                            }
                        },
                        yAxis: {
                            title: { text: null },
                            labels: { 
                                style: { 
                                    fontSize: '16px',
                                    color: '#000000'
                                }
                            },
                            gridLineDashStyle: 'shortdot',
                            gridLineWidth: 1,
                            gridLineColor: '#000000',
                            tickAmount: 5,
                            min: 0
                        },
                        xAxis: {
                            type: 'datetime',
                            labels: {
                                format: '{value:%H}h',
                                style: { 
                                    fontSize: '16px',
                                    color: '#000000'
                                },
                                step: 3
                            },
                            lineWidth: 0,
                            gridLineDashStyle: 'dot',
                            tickWidth: 1,
                            tickLength: 0,
                            gridLineWidth: 1,
                            gridLineColor: '#000000',
                            tickPixelInterval: 120
                        },
                        series: [{
                            name: 'Successful Backups',
                            data: hourlyChartData,
                            color: 'black'
                        }],
                        legend: { enabled: false },
                        credits: { enabled: false },
                        tooltip: { enabled: false }
                    });
                    <?php endif; ?>
                });  // End of DOMContentLoaded
                </script>
                <?php
            } catch (Exception $e) {
                ?>
                <div class="view view--full">
                    <div class="layout">
                        <div class="error-message">
                            <h3>Error Loading Dashboard</h3>
                            <p><?php echo htmlspecialchars($e->getMessage()); ?></p>
                            <p><a href="?">Try Again</a></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</body>
</html>


