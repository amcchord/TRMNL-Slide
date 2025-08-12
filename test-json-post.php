<?php
/**
 * Test script for JSON POST endpoint
 * 
 * This script demonstrates how to send a JSON POST request to json.php
 * Run this from command line: php test-json-post.php
 * Or access it via browser to see the result
 */

// Configuration - Update these values
$apiKey = 'YOUR_API_KEY_HERE';  // Replace with your actual API key
$clientFilter = '';              // Optional: filter by client name
$timezone = 'EST';               // EST, CST, MST, or PST

// Endpoint URL - adjust if running from different location
$url = 'http://localhost/trmnl/json.php';  // Update with your actual URL

// Prepare POST data
$postData = [
    'api_key' => $apiKey,
    'client_filter' => $clientFilter,
    'timezone' => $timezone
];

// Initialize cURL
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Accept: application/json'
]);

// Execute request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);

// Close cURL
curl_close($ch);

// Display results
if (PHP_SAPI === 'cli') {
    // Command line output
    echo "HTTP Status Code: $httpCode\n";
    
    if ($error) {
        echo "cURL Error: $error\n";
    } else {
        echo "Response:\n";
        $decoded = json_decode($response, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            print_r($decoded);
        } else {
            echo $response . "\n";
        }
    }
} else {
    // Browser output
    header('Content-Type: text/html; charset=utf-8');
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>JSON POST Test</title>
        <style>
            body { font-family: monospace; margin: 20px; }
            .status { margin: 10px 0; padding: 10px; background: #f0f0f0; }
            .error { background: #fee; color: #c00; }
            .success { background: #efe; color: #060; }
            pre { background: #f5f5f5; padding: 10px; overflow-x: auto; }
        </style>
    </head>
    <body>
        <h1>JSON POST Test Results</h1>
        
        <div class="status <?php echo $httpCode == 200 ? 'success' : 'error'; ?>">
            HTTP Status Code: <?php echo $httpCode; ?>
        </div>
        
        <?php if ($error): ?>
            <div class="status error">
                cURL Error: <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        
        <h2>Request Sent:</h2>
        <pre><?php echo json_encode($postData, JSON_PRETTY_PRINT); ?></pre>
        
        <h2>Response Received:</h2>
        <pre><?php 
            $decoded = json_decode($response, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                echo json_encode($decoded, JSON_PRETTY_PRINT);
            } else {
                echo htmlspecialchars($response);
            }
        ?></pre>
    </body>
    </html>
    <?php
}
?>
