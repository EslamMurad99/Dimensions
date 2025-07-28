<?php

// Debug script for Railway deployment
echo "=== Railway Debug Information ===\n";

// Environment variables
echo "APP_ENV: " . (getenv('APP_ENV') ?: 'not set') . "\n";
echo "APP_DEBUG: " . (getenv('APP_DEBUG') ?: 'not set') . "\n";
echo "APP_URL: " . (getenv('APP_URL') ?: 'not set') . "\n";
echo "PORT: " . (getenv('PORT') ?: 'not set') . "\n";
echo "RAILWAY_STATIC_URL: " . (getenv('RAILWAY_STATIC_URL') ?: 'not set') . "\n";

// File permissions
echo "\n=== File Permissions ===\n";
echo "storage directory writable: " . (is_writable('storage') ? 'yes' : 'no') . "\n";
echo "bootstrap/cache directory writable: " . (is_writable('bootstrap/cache') ? 'yes' : 'no') . "\n";

// Laravel configuration
echo "\n=== Laravel Configuration ===\n";
if (file_exists('bootstrap/cache/config.php')) {
    echo "Config cache exists: yes\n";
} else {
    echo "Config cache exists: no\n";
}

// Asset files
echo "\n=== Asset Files ===\n";
$assetFiles = [
    'public/vendor/swiper/swiper-bundle.min.js',
    'public/vendor/bootstrap/css/bootstrap.min.css',
    'public/css/main.css',
    'public/js/main.js'
];

foreach ($assetFiles as $file) {
    echo "$file: " . (file_exists($file) ? 'exists' : 'missing') . "\n";
}

echo "\n=== Debug Complete ===\n"; 