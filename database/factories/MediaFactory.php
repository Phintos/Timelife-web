<?php

use Faker\Generator as Faker;

$factory->define(App\Media::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement($array = array ('photo', 'video')) ,
        'id_user' => factory('App\User')->create()->id,
        'id_mood' => factory('App\Mood')->create()->id,
        'id_comment' => factory('App\Comment')->create()->id,
    ];
});
