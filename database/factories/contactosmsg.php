<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\contactosmsg;
use Faker\Generator as Faker;

$factory->define(contactosmsg::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'msg' => $faker->text($maxNbChars = 100)
    ];
});
