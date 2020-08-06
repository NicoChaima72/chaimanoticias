<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\News;
use App\User;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
	$users = User::get()->dump();
	$categories = Category::get()->dump();
	$title = $faker->unique()->sentence(4);

	return [
		'user_id' => $users[rand(0, $users->count() - 1)]->id,
		'category_id' => $categories[rand(0, $categories->count() - 1)]->id,
		'url' => to_slug($title),
		'title' => $title,
		'excerpt' => $faker->sentence(8),
		'body' => $faker->sentence(90)
	];
});
