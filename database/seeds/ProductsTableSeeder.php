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
/*        factory(\App\Category::class, 5)->create();
        factory(Product::class, 100)->create();
        factory(\App\ProductImage::class, 200)->create();*/

        //28. Model factories con relaciones
/*        $users = factory(App\User::class, 3)
            ->create()
            ->each(function ($user) {
                $user->posts()->save(factory(App\Post::class)->make());
            });*/

        // Factories con relaciones
        $categorias =  factory(\App\Category::class, 5)->create();
        $categorias->each(function ($c){
            $productos= factory(Product::class, 20)->make();
            $c->products()->saveMany($productos);

            $productos->each(function ($p) {
                $imagenes = factory(\App\ProductImage::class, 5)->make();
                $p->images()->saveMany($imagenes);
            });
        });
/*        $users = factory(App\User::class, 3)
            ->create()
            ->each(function ($user) {
                $user->posts()->save(factory(App\Post::class)->make());
            });*/
    }
}
