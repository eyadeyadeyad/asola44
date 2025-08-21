<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class RealProductSeeder extends Seeder
{
    public function run()
    {
        // Real products for Libya market
        $products = [
            [
                'title' => 'قميص رجالي قطني أبيض',
                'slug' => 'mens-white-cotton-shirt',
                'summary' => 'قميص رجالي أنيق من القطن الخالص، مناسب للعمل والمناسبات',
                'description' => 'قميص رجالي عالي الجودة مصنوع من القطن الخالص 100%. يتميز بالراحة والأناقة، مناسب للارتداء اليومي والمناسبات الرسمية. متوفر بمقاسات مختلفة.',
                'photo' => '/storage/photos/1/shirt-white.jpg',
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
                'title' => 'فستان نسائي أنيق',
                'slug' => 'elegant-womens-dress',
                'summary' => 'فستان نسائي أنيق ومريح، مناسب للمناسبات والخروجات',
                'description' => 'فستان نسائي عصري مصمم بعناية فائقة. مصنوع من أقمشة عالية الجودة تضمن الراحة والأناقة. مناسب للمناسبات الخاصة والخروجات اليومية.',
                'photo' => '/storage/photos/1/dress-elegant.jpg',
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
                'title' => 'حذاء رياضي للرجال',
                'slug' => 'mens-sports-shoes',
                'summary' => 'حذاء رياضي مريح للرجال، مناسب للرياضة والمشي',
                'description' => 'حذاء رياضي عالي الجودة مصمم خصيصاً للراحة والأداء. يتميز بنعل مرن ومواد تهوية ممتازة. مثالي للرياضة والأنشطة اليومية.',
                'photo' => '/storage/photos/1/shoes-sports.jpg',
                'stock' => 25,
                'size' => '40,41,42,43,44,45',
                'condition' => 'new',
                'status' => 'active',
                'price' => 120.00,
                'discount' => 20,
                'is_featured' => 0,
                'cat_id' => 1, // Men's Fashion
                'child_cat_id' => 12, // Shoes
                'brand_id' => 2, // Nike
            ],
            [
                'title' => 'جاكيت شتوي للنساء',
                'slug' => 'womens-winter-jacket',
                'summary' => 'جاكيت شتوي دافئ وأنيق للنساء',
                'description' => 'جاكيت شتوي عالي الجودة يوفر الدفء والحماية من البرد. مصمم بأسلوب عصري وأنيق يناسب جميع المناسبات الشتوية.',
                'photo' => '/storage/photos/1/jacket-winter.jpg',
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
            [
                'title' => 'بنطلون جينز رجالي',
                'slug' => 'mens-jeans-pants',
                'summary' => 'بنطلون جينز رجالي كلاسيكي وعملي',
                'description' => 'بنطلون جينز رجالي مصنوع من أجود أنواع القماش. يتميز بالمتانة والراحة، مناسب للارتداء اليومي والمناسبات غير الرسمية.',
                'photo' => '/storage/photos/1/jeans-mens.jpg',
                'stock' => 40,
                'size' => '30,32,34,36,38,40',
                'condition' => 'default',
                'status' => 'active',
                'price' => 65.00,
                'discount' => 8,
                'is_featured' => 0,
                'cat_id' => 1, // Men's Fashion
                'child_cat_id' => 5, // Jeans pants
                'brand_id' => 6, // Brand
            ],
            [
                'title' => 'تيشيرت نسائي قطني',
                'slug' => 'womens-cotton-tshirt',
                'summary' => 'تيشيرت نسائي مريح من القطن الخالص',
                'description' => 'تيشيرت نسائي عالي الجودة مصنوع من القطن الطبيعي 100%. يوفر راحة فائقة وملمس ناعم، مناسب للارتداء اليومي في جميع الفصول.',
                'photo' => '/storage/photos/1/tshirt-womens.jpg',
                'stock' => 60,
                'size' => 'S,M,L,XL',
                'condition' => 'new',
                'status' => 'active',
                'price' => 35.00,
                'discount' => 5,
                'is_featured' => 0,
                'cat_id' => 2, // Women's Fashion
                'child_cat_id' => 10, // Tops and Tshirt
                'brand_id' => 7, // Other
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}