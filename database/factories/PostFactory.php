<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	return [
		'post_type' => $faker -> randomElement(['formation', 'stage']),
                'titre' => $faker -> sentence(),
                'description' => $faker -> paragraph(),
                'created_at' => $faker -> dateTime(),
                'finished_at' => $faker -> dateTime(),
                'price' => $faker -> randomFloat($nbMaxDecimals = 2, $min= 0, $max = 5000.00),
                'max_users' => $faker -> numberBetween(0, 30)
	];
});
