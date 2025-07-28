#!/bin/bash

# Clear Laravel cache script for Railway
echo "=== Clearing Laravel Cache ==="

# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Rebuild caches for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "=== Cache cleared and rebuilt ===" 