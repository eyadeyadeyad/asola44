#!/bin/bash

# Build script for deployment
echo "Starting build process..."

# Install dependencies
composer install --no-dev --optimize-autoloader
npm install
npm run production

# Setup environment
cp .env.example .env
php artisan key:generate

# Create SQLite database
touch database/database.sqlite
php artisan migrate --force
php artisan db:seed --force

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Build completed successfully!"