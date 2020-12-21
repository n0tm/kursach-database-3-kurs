<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(\App\Model\Baker::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'surname' => $faker->lastName,
        'position' => $faker->randomElement(['Junior', 'Middle', 'Senior']),
        'bakery_id' => factory(\App\Model\Bakery::class),
    ];
});
