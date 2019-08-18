<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->words(6, true),
        'body' => $faker->paragraph(),
        'user_id' => User::all()->first()->getKey(),
    ];
});
