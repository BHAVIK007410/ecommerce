<?php

namespace Database\Seeders;

use App\Models\ProductTags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                'product_id' => 1,
                'tag_name' => 'usb',
            ],
            [
                'product_id' => 1,
                'tag_name' => 'drive',
            ],
            [
                'product_id' => 1,
                'tag_name' => 'sandisk',
            ],
            [
                'product_id' => 2,
                'tag_name' => 'smartwatch',
            ],
            [
                'product_id' => 2,
                'tag_name' => 'watch',
            ],
            [
                'product_id' => 3,
                'tag_name' => 'women',
            ],
            [
                'product_id' => 3,
                'tag_name' => 'clothes',
            ],
            [
                'product_id' => 4,
                'tag_name' => 'women',
            ],
            [
                'product_id' => 4,
                'tag_name' => 'clothes',
            ],
            [
                'product_id' => 5,
                'tag_name' => 'men',
            ],
            [
                'product_id' => 5,
                'tag_name' => 'clothes',
            ],
            [
                'product_id' => 6,
                'tag_name' => 'men',
            ],
            [
                'product_id' => 6,
                'tag_name' => 'clothes',
            ],
            [
                'product_id' => 7,
                'tag_name' => 'style',
            ],
            [
                'product_id' => 8,
                'tag_name' => 'style',
            ],
            [
                'product_id' => 9,
                'tag_name' => 'smartphone',
            ],
            [
                'product_id' => 10,
                'tag_name' => 'smartphone',
            ],
        ];

        foreach ($tags as $tag) {
            ProductTags::create($tag);
        }
    }
}
