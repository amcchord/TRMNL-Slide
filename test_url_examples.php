<?php
echo "Dashboard URL Examples with Timezone Support\n";
echo "============================================\n\n";

$baseUrl = "http://your-domain.com/trmnl/index.php";
$apiKey = "tk_your_api_key_here";

echo "Example URLs:\n\n";

echo "1. Eastern Time (default):\n";
echo "   $baseUrl?api_key=$apiKey\n\n";

echo "2. Eastern Time (explicit):\n";
echo "   $baseUrl?api_key=$apiKey&timezone=EST\n\n";

echo "3. Central Time:\n";
echo "   $baseUrl?api_key=$apiKey&timezone=CST\n\n";

echo "4. Mountain Time:\n";
echo "   $baseUrl?api_key=$apiKey&timezone=MST\n\n";

echo "5. Pacific Time:\n";
echo "   $baseUrl?api_key=$apiKey&timezone=PST\n\n";

echo "6. With Client Filter + Timezone:\n";
echo "   $baseUrl?api_key=$apiKey&client_filter=ClientName&timezone=PST\n\n";

echo "Note: These parameters can also be sent via POST from the configuration form.\n";
echo "The dashboard will display times in the selected timezone, including:\n";
echo "  - Current time in the title bar\n";
echo "  - 24-hour backup activity chart\n";
echo "  - Alert timestamps\n";
?>
