<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Color::truncate();

		Color::create([
			'description' => 'Nacional',
			'background' => '#d35400',
			'text' => '#fff',
		]);
		Color::create([
			'description' => 'Internacional',
			'background' => '#2c3e50',
			'text' => '#fff',
		]);
		Color::create([
			'description' => 'Deportes',
			'background' => '#27ae60',
			'text' => '#fff',
		]);
	}
}
