<?php

// Simple script to reset admin password
require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\User;
use Illuminate\Support\Facades\Hash;

// Create or update admin user
$admin = User::updateOrCreate(
    ['email' => 'admin@mail.com'],
    [
        'name' => 'Admin',
        'email' => 'admin@mail.com',
        'password' => Hash::make('admin123'),
        'role' => 'admin',
        'status' => 'active'
    ]
);

echo "Admin user created/updated successfully!\n";
echo "Email: admin@mail.com\n";
echo "Password: admin123\n";
echo "You can now login to the admin panel.\n";