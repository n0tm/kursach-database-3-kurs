<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(\App\Model\CourierTransport::class, function (Faker $faker) {
    $carNumberRegularExpression = '[A-Z]{1}[0-9]{3}[A-Z]{2}';
    $carModels = ['Audi', 'BMW', 'Ford', 'Honda', 'Suzuki', 'Kia', 'Mazda'];

    return [
        'number' => $faker->regexify($carNumberRegularExpression),
        'color' => $faker->colorName,
        'model' => $faker->randomElement($carModels),
    ];
});
