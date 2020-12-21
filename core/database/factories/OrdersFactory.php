<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(\App\Model\Order::class, function (Faker $faker) {
    return [
        'client_id' => factory(\App\Model\Client::class),
        'baker_id' => factory(\App\Model\Baker::class),
        'bun_id' => factory(\App\Model\Bun::class),
        'bakery_id' => factory(\App\Model\Bakery::class),
        'courier_id' => factory(\App\Model\Courier::class),
    ];
});
