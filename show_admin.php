<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\User;

echo "=== ADMIN CREDENTIALS ===\n";
echo "Looking for admin users...\n\n";

$admins = User::where('role', 'admin')->get();

if($admins->count() > 0) {
    foreach($admins as $admin) {
        echo "Name: " . $admin->name . "\n";
        echo "Email: " . $admin->email . "\n";
        echo "Role: " . $admin->role . "\n";
        echo "Status: " . $admin->status . "\n";
        echo "------------------------\n";
    }
    echo "\nUse any of the above emails with password: codeastro.com\n";
} else {
    echo "No admin users found!\n";
    echo "Creating admin user...\n";
    
    $admin = User::create([
        'name' => 'Admin',
        'email' => 'admin@mail.com',
        'password' => bcrypt('admin123'),
        'role' => 'admin',
        'status' => 'active'
    ]);
    
    echo "Admin created successfully!\n";
    echo "Email: admin@mail.com\n";
    echo "Password: admin123\n";
}

echo "\nAdmin Panel: http://localhost:8000/admin\n";