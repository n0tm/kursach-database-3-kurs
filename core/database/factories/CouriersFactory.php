<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(\App\Model\Courier::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'surname' => $faker->lastName,
        'transport_id' => factory(\App\Model\CourierTransport::class),
        'bakery_id' => factory(\App\Model\Bakery::class),
    ];
});
