<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Color;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

	$colors = Color::get()->dump();
	$color_id = $colors[rand(0, $colors->count() - 1)]->id;
	$description = to_capitalized($faker->unique()->words(2, true));

	return [
		'color_id' => $color_id,
		'description' =>  $description,
		'url' => to_slug("$description-$color_id")
	];
});
