<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    // Get a random user
    $user = \App\Models\User::inRandomOrder()->first();

    return [
        'user_id' => $user->id,
        'title' => $faker->sentence,
        'body' => $faker->text,
    ];
});
