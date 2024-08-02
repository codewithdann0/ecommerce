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
            'name' => 'Toyota Corolla',
            'description' => 'Reliable compact car with great fuel efficiency.',
            'price' => 20000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-toyota-corolla-sedan.webp',
            'category_id' => 1, // Ensure that category_id 1 exists in your categories table
        ]);

        Product::create([
            'name' => 'Honda Civic',
            'description' => 'Sporty compact car with modern features.',
            'price' => 22000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-honda-civic-sedan.webp',
            'category_id' => 1, // Ensure that category_id 1 exists in your categories table
        ]);

        Product::create([
            'name' => 'Ford Mustang',
            'description' => 'Classic muscle car with powerful performance.',
            'price' => 30000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-ford-mustang.webp',
            'category_id' => 2, // Ensure that category_id 2 exists in your categories table
        ]);

        Product::create([
            'name' => 'Chevrolet Camaro',
            'description' => 'Iconic sports car with aggressive styling.',
            'price' => 32000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-chevrolet-camaro.webp',
            'category_id' => 2, // Ensure that category_id 2 exists in your categories table
        ]);

        Product::create([
            'name' => 'Tesla Model 3',
            'description' => 'Electric car with cutting-edge technology.',
            'price' => 35000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-tesla-model-3.webp',
            'category_id' => 3, // Ensure that category_id 3 exists in your categories table
        ]);

        Product::create([
            'name' => 'BMW 3 Series',
            'description' => 'Luxury sedan with premium features and performance.',
            'price' => 40000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-bmw-3-series.webp',
            'category_id' => 4, // Ensure that category_id 4 exists in your categories table
        ]);

        Product::create([
            'name' => 'Audi A4',
            'description' => 'Elegant and sporty sedan with advanced technology.',
            'price' => 42000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-audi-a4.webp',
            'category_id' => 4, // Ensure that category_id 4 exists in your categories table
        ]);

        Product::create([
            'name' => 'Mercedes-Benz C-Class',
            'description' => 'Luxurious compact sedan with a refined ride.',
            'price' => 45000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-mercedes-benz-c-class.webp',
            'category_id' => 4, // Ensure that category_id 4 exists in your categories table
        ]);

        Product::create([
            'name' => 'Nissan Altima',
            'description' => 'Comfortable midsize sedan with a smooth ride.',
            'price' => 23000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-nissan-altima.webp',
            'category_id' => 1, // Ensure that category_id 1 exists in your categories table
        ]);

        Product::create([
            'name' => 'Hyundai Sonata',
            'description' => 'Spacious sedan with modern design and features.',
            'price' => 24000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-hyundai-sonata.webp',
            'category_id' => 1, // Ensure that category_id 1 exists in your categories table
        ]);

        Product::create([
            'name' => 'Subaru Outback',
            'description' => 'Versatile crossover with all-wheel drive capability.',
            'price' => 27000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-subaru-outback.webp',
            'category_id' => 5, // Ensure that category_id 5 exists in your categories table
        ]);

        Product::create([
            'name' => 'Jeep Grand Cherokee',
            'description' => 'Rugged SUV with off-road capabilities.',
            'price' => 35000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-jeep-grand-cherokee.webp',
            'category_id' => 5, // Ensure that category_id 5 exists in your categories table
        ]);

        Product::create([
            'name' => 'Land Rover Range Rover',
            'description' => 'Luxury SUV with exceptional off-road prowess.',
            'price' => 70000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-land-rover-range-rover.webp',
            'category_id' => 6, // Ensure that category_id 6 exists in your categories table
        ]);

        Product::create([
            'name' => 'Porsche Macan',
            'description' => 'Sporty luxury SUV with impressive handling.',
            'price' => 60000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-porsche-macan.webp',
            'category_id' => 6, // Ensure that category_id 6 exists in your categories table
        ]);

        Product::create([
            'name' => 'Lexus RX',
            'description' => 'Premium crossover with advanced features and comfort.',
            'price' => 55000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-lexus-rx.webp',
            'category_id' => 6, // Ensure that category_id 6 exists in your categories table
        ]);

        Product::create([
            'name' => 'Acura MDX',
            'description' => 'Three-row SUV with a focus on luxury and technology.',
            'price' => 50000,
            'image' => 'https://cdn.motor1.com/images/mgl/l7l37/s1/2022-acura-mdx.webp',
            'category_id' => 6, // Ensure that category_id 6 exists in your categories table
        ]);
    }
}
