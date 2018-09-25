<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

	$start = rand(1,27);

	return [
                'post_type' => $faker -> randomElement(['formation', 'stage']),
		'status' => $faker -> randomElement(['publié', 'non-publié']),
                'titre' => $faker -> sentence(),
                'description' => $faker -> paragraph(),
                'start' => $faker -> dateTimeInInterval("+" .$start . " days"),
                'end' => $faker -> dateTimeInInterval("+" .$start + 14 . " days"),
                'price' => $faker -> randomFloat($nbMaxDecimals = 2, $min= 0, $max = 5000.00),
                'max_users' => $faker -> numberBetween(0, 30)
	];
});