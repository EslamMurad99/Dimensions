#!/bin/bash

# Railway deployment setup script
echo "Setting up Laravel for Railway deployment..."

# Set environment variables for Railway
export APP_ENV=production
export APP_DEBUG=false
export APP_URL=https://$RAILWAY_STATIC_URL

# Generate application key if not exists
php artisan key:generate --force

# Clear and cache config
php artisan config:clear
php artisan config:cache

# Clear and cache routes
php artisan route:clear
php artisan route:cache

# Clear and cache views
php artisan view:clear
php artisan view:cache

# Run migrations
php artisan migrate --force

echo "Railway setup completed!" 