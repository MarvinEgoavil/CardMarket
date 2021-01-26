<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\roles;
use App\Models\sales;
use App\Models\collection;
use App\Models\game_cards;


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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'token'=>'',
        'role'=>$faker->randomElement($array=array('administrador','profesional','particular')),
    ];
});

$factory->define(sales::class,function(faker $faker) {
    return  [
       'quantity' => $faker->numberBetween($min=1,$max=20),
       'price'=>$faker->randomFloat($nbMaxDecimals=1,$min=10,$max= 50000),
    ];
});

$factory->define(collection::class,function(faker $faker){
    return [
        'name' => $faker -> name,
        'description' =>$faker->text,
        'user_id'=> $faker->numberBetween($min=1,$max=30),
        'sales_id'=>$faker->numerBetween($min=1,$max=20),
    ];
});

$factory->define(game_cards::class,function(faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>$faker->text,
        'user_id'=>$faker->numberBetween($min=1, $max =30),
        'sales_id'=>$faker->numberBetween($min =1,$max=20),

    ],

});