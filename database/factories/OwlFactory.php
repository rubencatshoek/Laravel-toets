<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Owl;

$factory->define(Owl::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'is_resit' => $faker->boolean(),
        'version_nr' => $faker->numberBetween(1, 2),
        'comments' => $faker->text()
    ];
});
