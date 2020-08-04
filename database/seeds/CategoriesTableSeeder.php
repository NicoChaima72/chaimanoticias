<?php

use App\Category;
use App\Color;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\Lorem as Lorem;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$lorem = new Lorem(new Faker);
		Category::truncate();
		$colors = Color::get()->dump();

		// for ($i = 0; $i < 5; $i++) {
		// 	$color_id = $colors[rand(0, $colors->count() - 1)]->id;
		// 	$description = $lorem->words(2, true);

		// 	Category::create([
		// 		'color_id' => $color_id,
		// 		'description' => to_capitalized($description),
		// 		'url' => to_slug($description)
		// 	]);
		// }



		factory(Category::class, 5)->create();
	}
}
