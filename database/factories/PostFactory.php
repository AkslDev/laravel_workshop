<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
	return [
		'post_type' => $faker -> randomElement(['formation', 'stage']),
                'titre' => $faker -> sentence(),
                'description' => $faker -> paragraph(),
                'start' => $faker -> dateTime(),
                'end' => $faker -> dateTime(),
                'price' => $faker -> randomFloat($nbMaxDecimals = 2, $min= 0, $max = 5000.00),
                'max_users' => $faker -> numberBetween(0, 30)
	];
});
