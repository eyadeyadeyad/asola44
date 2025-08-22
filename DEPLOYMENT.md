# Railway Deployment Guide

## Prerequisites
- Git installed and configured
- PHP zip extension enabled
- Railway account

## Setup Steps

1. **Enable PHP zip extension**
   - Edit `C:\xampp\php\php.ini`
   - Uncomment: `extension=zip`
   - Restart Apache

2. **Install dependencies**
   ```bash
   composer install --ignore-platform-reqs
   ```

3. **Initialize Git repository**
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   ```

4. **Deploy to Railway**
   - Connect GitHub repository to Railway
   - Set environment variables from `.env.railway`
   - Deploy automatically on push

## Railway Environment Variables
Copy from `.env.railway` to Railway dashboard:
- `APP_KEY` (generate with `php artisan key:generate`)
- Database variables (use Railway MySQL addon)
- `APP_URL` (use Railway domain)

## Files Created for Railway
- `railway.json` - Railway configuration
- `nixpacks.toml` - Build configuration  
- `Procfile` - Process definition
- `.env.railway` - Environment template