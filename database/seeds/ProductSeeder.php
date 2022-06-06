<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name'=> 'Pilsen',
            'product_price'=> '25',
            'product_category'=> 1,
            'product_image'=> 'Pilsen.jpg',
            'status'=> 1,
         ]);
        //  Product::create([
        //     'product_name'=> 'Pilsen',
        //     'product_price'=> '25',
        //     'product_category'=> 1,
        //     'product_image'=> 'Pilsen.jpg',
        //     'status'=> 1,
        //  ]);
    }
}
