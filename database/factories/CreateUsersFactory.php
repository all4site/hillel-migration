<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\UserModel;
use Faker\Generator as Faker;

$factory->define(UserModel::class, function (Faker $faker) {
    return [
		    'name' => $faker->name,
		    'email' => $faker->unique()->safeEmail,
    ];
});
