<?php

use Faker\Generator as Faker;
use App\news;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(1, true),
        'content' => $faker->text(300)
    ];
});
