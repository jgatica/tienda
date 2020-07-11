<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Aca se hace uso de los model factories
        factory(\App\Category::class, 5)->create();
        factory(Product::class, 100)->create();
        factory(\App\ProductImage::class, 200)->create();
    }
}
