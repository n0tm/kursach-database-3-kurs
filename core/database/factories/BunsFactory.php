<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(\App\Model\Bun::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Kurnik', 'Russian Pie', 'Kulebyaka', 'Cheesecake', 'Shanga']),
        'weight' => $faker->randomNumber(),
        'amount' => $faker->randomNumber(),
    ];
});
