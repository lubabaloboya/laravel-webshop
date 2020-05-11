<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'description' => 'MackBook Pro',
            'price' => 2499.99,
        ]);

        Product::create([
            'name' => 'Dell Vostro 3557',
            'description' => 'Dell Vostro 3557',
            'price' => 1499.99
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'description' => 'iPhone 11 Pro',
            'price' => 649.99
        ]);

        Product::create([
            'name' => 'Remax 610D Headset',
            'description' => 'Remax 610D Headset',
            'price' => 8.99
        ]);

        Product::create([
            'name' => 'Samsung LED TV',
            'description' => 'Samsung LED TV', 
            'price' => 41.99
        ]);

        Product::create([
            'name' => 'Samsung Digital Camera',
            'description' => 'Samsung Digital Camera',
            'price' => 144.99
        ]);

        Product::create([
            'name' => 'Huawei GR 5 2017',
            'description' => 'Huawei GR 5 2017',
            'price' => 148.99
        ]);
    }
}
