<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	return [
                'category_id' => $faker -> word(),
                'link' => $faker -> word(),
                'post_id' => $faker -> word()
	];
});
