<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(\App\Model\DiscountCard::class, function (Faker $faker) {
    return [
        'discount' => $faker->numberBetween(10, 80),
    ];
});
