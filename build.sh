#!/bin/bash

# Simple build script
composer install --no-dev --optimize-autoloader
npm install
npm run production
cp .env.example .env
echo "APP_KEY=base64:$(openssl rand -base64 32)" >> .env
touch database/database.sqlite