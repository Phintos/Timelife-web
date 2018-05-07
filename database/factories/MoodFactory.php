<?php

use Faker\Generator as Faker;

$factory->define(App\Mood::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement($array = array ('good', 'bad', 'love')),
    ];
});
