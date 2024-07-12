<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Add some sample products
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product description for Product 1.',
            'price' => 19.99,
            'image' => 'sample-product-1.jpg',
            'category_id' => 1, // Ensure that category_id 1 exists in your categories table
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'This is a sample product description for Product 2.',
            'price' => 29.99,
            'image' => 'sample-product-2.jpg',
            'category_id' => 1, // Ensure that category_id 1 exists in your categories table
        ]);
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product description for Product 1.',
            'price' => 19.99,
            'image' => 'sample-product-1.jpg',
            'category_id' => 1, // Ensure that category_id 1 exists in your categories table
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'This is a sample product description for Product 2.',
            'price' => 29.99,
            'image' => 'sample-product-2.jpg',
            'category_id' => 1, // Ensure that category_id 1 exists in your categories table
        ]);

        // Add more products as needed
    }
}
