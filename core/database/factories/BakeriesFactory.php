<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(\App\Model\Bakery::class, function (Faker $faker) {
    return [
        'address' => $faker->streetAddress,
    ];
});
