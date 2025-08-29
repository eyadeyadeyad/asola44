#!/bin/bash

# Run migrations and seed
php artisan migrate --force
php artisan db:seed --force

# Start server
php artisan serve --host=0.0.0.0 --port=${PORT:-8000}