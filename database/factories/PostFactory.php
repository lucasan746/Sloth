<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'text'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'imagenVideo'=>$faker->image('public/storage/',640,480, null, false, 'cats'),
        'user_id'=>$faker->numberBetween($min = 1, $max = 30)
    ];
});
