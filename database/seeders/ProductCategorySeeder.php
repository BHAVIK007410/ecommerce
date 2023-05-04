<?php

namespace Database\Seeders;

use App\Models\ProductCategories;
use Illuminate\Database\Seeder;

/**
 * Class ProductCategorySeeder
 * 
 * @package Database\Seeders
 */
class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_name' => 'Electronics'
            ],
            [
                'category_name' => 'Women Clothing'
            ],
            [
                'category_name' => 'Men Clothing'
            ],
            [
                'category_name' => 'Footwear'
            ],
            [
                'category_name' => 'Smart Phones'
            ],
        ];

        foreach ($categories as $category) {
            ProductCategories::create($category);
        }
    }
}
