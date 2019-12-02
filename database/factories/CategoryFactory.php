<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->realText(),
        'is_menu' => 1,
        'status' => 1,
        'featured' => 1,
        'parent_id' => 1,
        'image' => $faker->imageUrl(),
        'icon' => 'icon',
        'menu_color' => '#0000'
    ];
});
