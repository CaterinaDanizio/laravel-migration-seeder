<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'name' => $faker ->company,
        'logo' => $faker ->imageUrl($width = 640, $height = 480),
        'n_locations' => $faker ->numberBetween($min = 1, $max = 100)
    ];
});
