<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\VerificationCode;
use Faker\Generator as Faker;

$factory->define(VerificationCode::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'account' => $faker->phoneNumber,
        'code' => $faker->numberBetween(1000, 999999),
        'state' => 0,
    ];
});
