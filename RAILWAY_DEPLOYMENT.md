# Railway Deployment Guide

## Overview
This guide helps you deploy the Dimensions Laravel application to Railway and fix common HTTPS/mixed content issues.

## Issues Fixed

### 1. Mixed Content Errors
- **Problem**: Site loads over HTTPS but tries to load resources over HTTP
- **Solution**: 
  - Added `Content-Security-Policy` meta tag to force HTTPS
  - Removed duplicate CDN links that were conflicting with local vendor files
  - Added HTTPS middleware for production

### 2. Swiper.js Not Defined
- **Problem**: Swiper library wasn't loading properly
- **Solution**:
  - Added fallback CDN loading if local files fail
  - Fixed duplicate Swiper declarations
  - Added proper initialization checks

### 3. Duplicate Variable Declarations
- **Problem**: JavaScript variables declared multiple times
- **Solution**:
  - Used `window` object to avoid conflicts
  - Added existence checks before initialization
  - Fixed syntax errors in main.js

### 4. Favicon Loading Issues
- **Problem**: Favicon requested over HTTP instead of HTTPS
- **Solution**:
  - Updated favicon link to use Laravel's `asset()` helper
  - Added proper MIME type

## Railway Configuration

### Environment Variables
Set these in your Railway dashboard:

```bash
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.up.railway.app
APP_KEY=base64:your-generated-key
```

### Required Files
- `Procfile` - Updated to use `$PORT` environment variable
- `start.sh` - Bootstrap script for Railway
- `railway-setup.sh` - Setup script for initial deployment

## Deployment Steps

1. **Push to Railway**:
   ```bash
   git add .
   git commit -m "Fix Railway deployment issues"
   git push
   ```

2. **Set Environment Variables** in Railway dashboard:
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `APP_URL=https://your-app-name.up.railway.app`

3. **Generate Application Key**:
   ```bash
   php artisan key:generate --force
   ```

4. **Run Migrations**:
   ```bash
   php artisan migrate --force
   ```

## Debugging

### Check Deployment Status
Visit: `https://your-app-name.up.railway.app/health`

### Run Debug Script
```bash
php debug-railway.php
```

### Common Issues

1. **Assets not loading**:
   - Check if vendor files exist in `public/vendor/`
   - Verify file permissions
   - Check browser console for 404 errors

2. **Database connection**:
   - Ensure database is provisioned in Railway
   - Check database credentials in environment variables

3. **HTTPS redirects**:
   - Verify `APP_URL` is set to HTTPS
   - Check if HTTPS middleware is active

## File Changes Made

### Frontend Fixes
- `resources/views/index.blade.php`: Fixed duplicate declarations, added HTTPS meta tag
- `public/js/main.js`: Fixed syntax errors, removed duplicate Swiper initialization
- `public/js/mobile-nav.js`: No changes needed

### Backend Fixes
- `bootstrap/app.php`: Added HTTPS middleware
- `app/Http/Middleware/ForceHttps.php`: New middleware for HTTPS enforcement
- `routes/web.php`: Added health check endpoint
- `Procfile`: Updated to use `$PORT` variable

### Deployment Files
- `railway-setup.sh`: Setup script for Railway
- `debug-railway.php`: Debug script for troubleshooting
- `RAILWAY_DEPLOYMENT.md`: This guide

## Testing

After deployment, test these features:

1. **Homepage**: Should load without mixed content errors
2. **Swiper carousels**: Should work properly
3. **Navigation**: Should work on mobile and desktop
4. **Contact form**: Should submit successfully
5. **Admin panel**: Should be accessible

## Monitoring

- Use Railway's built-in monitoring
- Check `/health` endpoint for application status
- Monitor browser console for JavaScript errors
- Check Laravel logs in Railway dashboard

## Support

If issues persist:
1. Check Railway deployment logs
2. Run `debug-railway.php` script
3. Verify all environment variables are set
4. Check file permissions and Laravel cache 