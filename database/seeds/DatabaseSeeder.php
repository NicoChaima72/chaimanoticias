<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// Deshabilitamos las llaves foraneas
		DB::Statement('SET FOREIGN_KEY_CHECKS=0');

		$this->call(UsersTableSeeder::class);
		$this->call(ColorsTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		$this->call(NewsTableSeeder::class);

		DB::Statement('SET FOREIGN_KEY_CHECKS=1');
	}
}
