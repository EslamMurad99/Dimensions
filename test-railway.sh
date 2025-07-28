#!/bin/bash

# Test Railway deployment script
echo "=== Testing Railway Deployment ==="

# Get the app URL from environment or use default
APP_URL=${RAILWAY_STATIC_URL:-"dimensions-production.up.railway.app"}

echo "Testing app URL: https://$APP_URL"

# Test health endpoint
echo "Testing health endpoint..."
curl -s "https://$APP_URL/health" | jq . 2>/dev/null || echo "Health endpoint not responding or jq not installed"

# Test main page
echo "Testing main page..."
HTTP_CODE=$(curl -s -o /dev/null -w "%{http_code}" "https://$APP_URL")
echo "Main page HTTP code: $HTTP_CODE"

if [ "$HTTP_CODE" = "200" ]; then
    echo "✅ Main page is working!"
else
    echo "❌ Main page returned HTTP $HTTP_CODE"
fi

# Test for common issues
echo "Testing for common issues..."

# Check if there are redirect loops
REDIRECT_COUNT=$(curl -s -o /dev/null -w "%{num_redirects}" "https://$APP_URL")
if [ "$REDIRECT_COUNT" -gt 5 ]; then
    echo "❌ Too many redirects detected: $REDIRECT_COUNT"
else
    echo "✅ Redirect count is normal: $REDIRECT_COUNT"
fi

# Check if assets are loading
echo "Testing asset loading..."
ASSET_CODE=$(curl -s -o /dev/null -w "%{http_code}" "https://$APP_URL/css/main.css")
if [ "$ASSET_CODE" = "200" ]; then
    echo "✅ CSS assets are loading"
else
    echo "❌ CSS assets returned HTTP $ASSET_CODE"
fi

echo "=== Test Complete ===" 