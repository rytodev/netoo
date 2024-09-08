<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Makanan'],
            ['name' => 'Minuman']
        ];

        $products = [
            [
                'category_id' => 1,
                'name' => 'Gorengan',
                'price' => 1000,
                'description' => 'Enak coyy.',
                'image_url' => 'https://www.shutterstock.com/shutterstock/photos/2183293291/display_1500/stock-photo-gorengan-fried-food-is-one-type-of-popular-snack-in-indonesia-indonesian-street-food-top-view-2183293291.jpg'
            ],
            [
                'category_id' => 2,
                'name' => 'Gudey Frizz',
                'price' => 5000,
                'description' => 'Segerrr.',
                'image_url' => 'https://mojok.co/terminal/wp-content/uploads/2023/11/Untitled-design-2023-11-20T115234.759-750x500.jpg'
            ]
        ];

        Category::insert($categories);
        Product::insert($products);
    }
}
