<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'name' => $faker ->word,
        'address' => $faker ->address,
        'n_employees' => $faker ->numberBetween($min = 1, $max = 300)
    ];
});
