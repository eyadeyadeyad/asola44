<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Brand;

class SampleCategoriesAndBrandsSeeder extends Seeder
{
    public function run()
    {
        // Create parent categories
        $mensFashion = Category::create([
            'title' => "Men's Fashion",
            'slug' => 'mens-fashion',
            'summary' => "Men's clothing and accessories",
            'photo' => 'default.jpg',
            'status' => 'active',
            'is_parent' => 1,
            'parent_id' => null,
            'added_by' => 1,
        ]);

        $womensFashion = Category::create([
            'title' => "Women's Fashion",
            'slug' => 'womens-fashion',
            'summary' => "Women's clothing and accessories",
            'photo' => 'default.jpg',
            'status' => 'active',
            'is_parent' => 1,
            'parent_id' => null,
            'added_by' => 1,
        ]);

        // Create child categories for Men's Fashion
        $mensTshirts = Category::create([
            'title' => 'T-shirts',
            'slug' => 'mens-tshirts',
            'summary' => "Men's T-shirts and tops",
            'photo' => 'default.jpg',
            'status' => 'active',
            'is_parent' => 0,
            'parent_id' => $mensFashion->id,
            'added_by' => 1,
        ]);

        $mensJeans = Category::create([
            'title' => 'Jeans pants',
            'slug' => 'mens-jeans',
            'summary' => "Men's jeans and pants",
            'photo' => 'default.jpg',
            'status' => 'active',
            'is_parent' => 0,
            'parent_id' => $mensFashion->id,
            'added_by' => 1,
        ]);

        $mensShoes = Category::create([
            'title' => 'Shoes',
            'slug' => 'mens-shoes',
            'summary' => "Men's shoes and footwear",
            'photo' => 'default.jpg',
            'status' => 'active',
            'is_parent' => 0,
            'parent_id' => $mensFashion->id,
            'added_by' => 1,
        ]);

        // Create child categories for Women's Fashion
        $womensDresses = Category::create([
            'title' => 'Dresses',
            'slug' => 'womens-dresses',
            'summary' => "Women's dresses",
            'photo' => 'default.jpg',
            'status' => 'active',
            'is_parent' => 0,
            'parent_id' => $womensFashion->id,
            'added_by' => 1,
        ]);

        $womensHoodies = Category::create([
            'title' => 'Hoodies and Sweatshirts',
            'slug' => 'womens-hoodies',
            'summary' => "Women's hoodies and sweatshirts",
            'photo' => 'default.jpg',
            'status' => 'active',
            'is_parent' => 0,
            'parent_id' => $womensFashion->id,
            'added_by' => 1,
        ]);

        $womensTops = Category::create([
            'title' => 'Tops and Tshirts',
            'slug' => 'womens-tops',
            'summary' => "Women's tops and T-shirts",
            'photo' => 'default.jpg',
            'status' => 'active',
            'is_parent' => 0,
            'parent_id' => $womensFashion->id,
            'added_by' => 1,
        ]);

        // Create brands
        $brands = [
            ['title' => 'Adidas', 'slug' => 'adidas', 'status' => 'active'],
            ['title' => 'Nike', 'slug' => 'nike', 'status' => 'active'],
            ['title' => 'Kappa', 'slug' => 'kappa', 'status' => 'active'],
            ['title' => 'Prada', 'slug' => 'prada', 'status' => 'active'],
            ['title' => 'Gucci', 'slug' => 'gucci', 'status' => 'active'],
            ['title' => 'Brand', 'slug' => 'brand', 'status' => 'active'],
            ['title' => 'Other', 'slug' => 'other', 'status' => 'active'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}