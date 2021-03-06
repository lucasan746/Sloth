<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstNameFemale,
        'user'=> $faker->name,
        'email' => $faker->unique()->safeEmail,
        'apellido' => $faker->lastName,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'sexo'=>'M',
        'pais'=>'Arg',
        'fotoperfil'=>$faker->image('public/storage/',640,480, 'cats', false),
        'fecha'=>'10-10-2012',
    ];
});
