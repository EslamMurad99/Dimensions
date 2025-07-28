#!/bin/bash
# Wait until port is ready
php artisan migrate --force
sleep 1
php -S 0.0.0.0:$PORT -t public