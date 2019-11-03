<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\User::class,
        function (Faker\generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'age' => random_int(1, 99),
    ];
});
