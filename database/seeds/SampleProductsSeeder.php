<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class SampleProductsSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'title' => 'Men\'s White Cotton Shirt',
                'slug' => 'mens-white-cotton-shirt',
                'summary' => 'Elegant cotton shirt for men, suitable for work and occasions',
                'description' => 'High-quality men\'s shirt made of 100% pure cotton. Features comfort and elegance, suitable for daily wear and formal occasions. Available in various sizes.',
                'photo' => 'default.jpg',
                'stock' => 50,
                'size' => 'S,M,L,XL,XXL',
                'condition' => 'new',
                'status' => 'active',
                'price' => 45.00,
                'discount' => 10,
                'is_featured' => 1,
                'cat_id' => 1, // Men's Fashion
                'child_cat_id' => 4, // T-shirts
                'brand_id' => 1, // Adidas
            ],
            [
                'title' => 'Elegant Women\'s Dress',
                'slug' => 'elegant-womens-dress',
                'summary' => 'Elegant and comfortable women\'s dress, suitable for occasions and outings',
                'description' => 'Modern women\'s dress designed with great care. Made of high-quality fabrics that ensure comfort and elegance. Suitable for special occasions and daily outings.',
                'photo' => 'default.jpg',
                'stock' => 30,
                'size' => 'S,M,L,XL',
                'condition' => 'hot',
                'status' => 'active',
                'price' => 85.00,
                'discount' => 15,
                'is_featured' => 1,
                'cat_id' => 2, // Women's Fashion
                'child_cat_id' => 8, // Dress
                'brand_id' => 4, // Prada
            ],
            [
                'title' => 'Men\'s Sports Shoes',
                'slug' => 'mens-sports-shoes',
                'summary' => 'Comfortable sports shoes for men, suitable for sports and walking',
                'description' => 'High-quality sports shoes designed specifically for comfort and performance. Features a flexible sole and excellent ventilation materials. Perfect for sports and daily activities.',
                'photo' => 'default.jpg',
                'stock' => 25,
                'size' => '40,41,42,43,44,45',
                'condition' => 'new',
                'status' => 'active',
                'price' => 120.00,
                'discount' => 20,
                'is_featured' => 0,
                'cat_id' => 1, // Men's Fashion
                'child_cat_id' => 6, // Shoes
                'brand_id' => 2, // Nike
            ],
            [
                'title' => 'Women\'s Winter Jacket',
                'slug' => 'womens-winter-jacket',
                'summary' => 'Warm and elegant winter jacket for women',
                'description' => 'High-quality winter jacket that provides warmth and protection from the cold. Designed in a modern and elegant style that suits all winter occasions.',
                'photo' => 'default.jpg',
                'stock' => 20,
                'size' => 'S,M,L,XL',
                'condition' => 'hot',
                'status' => 'active',
                'price' => 95.00,
                'discount' => 12,
                'is_featured' => 1,
                'cat_id' => 2, // Women's Fashion
                'child_cat_id' => 9, // Hoodies and Sweatshirts
                'brand_id' => 3, // Kappa
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}