#!/bin/sh

# Run migrations
php artisan migrate --force

# Serve Laravel using PHP-FPM & Nginx
nginx -g "daemon off;" &
php-fpm