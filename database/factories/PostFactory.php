<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker ->unique() -> word(),
        'author' => $faker -> name(),
        'subtitle' => $faker -> word(),
        'content' => $faker ->text(),
        'date' => $faker -> date(),
        'category_id' => $faker -> numberBetween(0,999),
    ];
});
