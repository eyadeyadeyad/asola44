# Laravel Ecommerce Application

A modern ecommerce application built with Laravel framework, featuring a complete online shopping experience with admin panel, payment integration, and more.

## Features

- 🛍️ Complete ecommerce functionality
- 👤 User authentication and profiles
- 🛒 Shopping cart and wishlist
- 💳 Payment integration (PayPal)
- 📧 Email notifications
- 📊 Admin dashboard
- 📱 Responsive design
- 🔍 Product search and filtering
- 📄 PDF invoice generation

## Requirements

- PHP >= 8.1 (tested with 8.2.12)
- Composer
- Node.js >= 16.x
- MySQL >= 8.0
- Git
- PHP Extensions: zip, mbstring, dom, fileinfo, mysql, gd

## Installation

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd Ecommerce-Laravel
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   - Update `.env` file with your database credentials
   - Create a MySQL database

6. **Run migrations and seeders**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. **Build assets**
   ```bash
   npm run production
   ```

8. **Set permissions**
   ```bash
   chmod -R 777 storage bootstrap/cache
   ```

9. **Start the application**
   ```bash
   php artisan serve
   ```

## Configuration

### Environment Variables

Key environment variables to configure:

```env
APP_NAME="Laravel Ecommerce"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password

PAYPAL_CLIENT_ID=your_paypal_client_id
PAYPAL_CLIENT_SECRET=your_paypal_secret
```

## Development

### Running Tests
```bash
vendor/bin/phpunit
```

### Code Style
```bash
vendor/bin/php-cs-fixer fix
```

### Development Server
```bash
php artisan serve
npm run watch
```

## Deployment

### Production Setup

1. **Server Requirements**
   - PHP 8.2.12 or higher
   - MySQL 8.0+
   - Composer
   - Node.js 18+

2. **Environment**
   ```bash
   APP_ENV=production
   APP_DEBUG=false
   ```

3. **Optimize for Production**
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   npm run production
   ```

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## Security

If you discover any security-related issues, please email [your-email] instead of using the issue tracker.

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## Support

For support, email [your-email] or create an issue on GitHub.