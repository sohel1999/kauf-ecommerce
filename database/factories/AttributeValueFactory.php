<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AttributeValue;
use Faker\Generator as Faker;

$factory->define(AttributeValue::class, function (Faker $faker) {
    return [
        'attribute_id'=>random_int(1,10),
        'value'=>$faker->colorName
    ];
});
