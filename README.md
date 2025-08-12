# Slide Backup Dashboard for TRMNL

A professional dashboard display for TRMNL eInk devices that shows the state of Slide backups.

## Requirements

- PHP 7.0 or higher with cURL extension
- Web server (Apache, Nginx, etc.)
- Valid Slide API key

## Features

- **Real-time Backup Status**: Displays ALL successful, failed, and pending backups from the last 24 hours (automatically paginated to capture more than 50 backups)
- **System Overview**: Shows total agents, devices, and storage utilization
- **Visual Charts**: 
  - 7-day backup trend chart showing daily success/failure rates
  - Agent health gauge showing online/offline status
  - Storage utilization gauge with capacity warnings
- **Client Filtering**: Ability to filter dashboard by specific client name
- **Clean eInk Design**: Optimized for 1-bit display with high contrast patterns

## Usage

### Direct Access
1. Open `index.php` in your web browser
2. Enter your Slide API key (format: `tk_...`)
3. Optionally enter a client name to filter by
4. Click "Load Dashboard" to view backup status

### URL Parameters
You can also pass parameters directly in the URL:
```
index.php?api_key=YOUR_API_KEY&client_filter=CLIENT_NAME
```

### API Key
The dashboard requires a valid Slide API key with read permissions for:
- Clients
- Devices
- Agents
- Backups
- Snapshots
- Alerts

## Files

- `index.php` - Main dashboard interface
- `api.php` - Slide API helper class with methods for fetching backup data
- `docs/framework/` - TRMNL framework documentation and examples

## Dashboard Metrics

### Header Statistics
- **Successful (24h)**: Count of successful backups in the last 24 hours
- **Failed (24h)**: Count of failed backups in the last 24 hours
- **Success Rate**: Percentage of successful backups
- **Active Alerts**: Number of unresolved alerts

### System Overview
- **Total Agents**: Number of backup agents with online/warning/offline breakdown
- **Total Devices**: Number of Slide devices with snapshot count
- **Storage Used**: Current storage utilization with percentage of total capacity

### Charts
- **24-Hour Backup Activity**: Spline chart showing successful backups per hour over the last 24 hours, styled according to TRMNL framework standards with:
  - Bold black line (4px width)
  - Short-dot grid lines
  - 16px font labels
  - No animations for proper eInk rendering
- **7-Day Backup Trend**: Column chart showing daily backup success/failure counts (optional)
- **Agent Health**: Gauge showing percentage of agents currently online (optional)
- **Storage Utilization**: Gauge showing storage usage percentage with status indicators (optional)

## Design

The dashboard uses the official TRMNL framework with:
- HTML structure following the TRMNL boilerplate template
- Official TRMNL CSS (`https://usetrmnl.com/css/latest/plugins.css`)
- Official TRMNL JavaScript (`https://usetrmnl.com/js/latest/plugins.js`)
- Google Inter font family for optimal readability
- Proper `environment trmnl` body class for framework compatibility
- High contrast black and white design optimized for eInk displays
- Pattern fills instead of colors for different data series
- Clean, professional layout with clear hierarchy
- Responsive grid system that adapts to screen size
- No animations to ensure proper screenshot rendering

## Error Handling

If the API connection fails or invalid credentials are provided, the dashboard will display an error message with details about the issue.

## Testing

The dashboard has been tested with the Slide API and successfully displays:
- 3 clients
- 2 devices  
- 8 agents
- 386 backups
- Real-time backup statistics and trends
