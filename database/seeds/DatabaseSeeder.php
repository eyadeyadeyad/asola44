<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(SettingTableSeeder::class);
         $this->call(CouponSeeder::class);
         // Temporarily commenting out RealProductSeeder as it's causing issues
         // $this->call(RealProductSeeder::class);
         
         // Add our new seeders
         $this->call(SampleCategoriesAndBrandsSeeder::class);
         $this->call(SampleProductsSeeder::class);
    }
}
