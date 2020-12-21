<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(\App\Model\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'surname' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'discount_card_id' => factory(\App\Model\DiscountCard::class),
    ];
});
