#!/bin/sh

# Ensure Laravel is bootstrapped properly
php artisan config:clear
php artisan config:cache
php artisan migrate --force

# Start PHP built-in server — production-compatible entrypoint
exec php -S 0.0.0.0:$PORT -t public server.php