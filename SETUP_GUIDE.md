# Laravel Ecommerce Project Setup Guide

## Issues Fixed:
✅ Updated .env file with correct database configuration

## Next Steps to Complete Setup:

### 1. Import Database
- Open phpMyAdmin (http://localhost/phpmyadmin)
- Create a new database named: `ecommerceadvlara`
- Import the SQL file: `DATABASE FILE/ecommerceadvlara.sql`

### 2. Install Dependencies
Open command prompt in project directory and run:
```bash
composer install
npm install
```

### 3. Generate Application Key (if needed)
```bash
php artisan key:generate
```

### 4. Create Storage Link
```bash
php artisan storage:link
```

### 5. Run Migrations (if database import doesn't work)
```bash
php artisan migrate --seed
```

### 6. Start the Server
```bash
php artisan serve
```

## Login Credentials:
- **Admin**: admin@mail.com / codeastro.com
- **Customer**: customer@mail.com / codeastro.com

## Project URL:
- Local: http://localhost:8000
- XAMPP: http://localhost/salwa/Ecommerce-Laravel/public

## Troubleshooting:
- Make sure XAMPP Apache and MySQL are running
- Check if composer is installed globally
- Verify PHP version compatibility (Laravel requires PHP 7.3+)