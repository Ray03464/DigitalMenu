#!/usr/bin/env bash
set -e

echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --working-dir=/var/www/html

echo "Preparing Laravel cache directories..."
mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache
chown -R nginx:nginx storage bootstrap/cache

echo "Clearing stale caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo "Caching Laravel config and routes..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
