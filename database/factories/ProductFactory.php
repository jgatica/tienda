<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
/*
 *             $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->text('long_description')->nullable();
            $table->float('price');
            $table->timestamps();

            // FK
            $table->unsignedBigInteger('category_id')->nullable();
 */
$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence(10),
        'long_description' => $faker->text,
        'price' => $faker->randomFloat(2, 5, 150)
    ];
});
