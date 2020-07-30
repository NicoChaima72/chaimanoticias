<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Nicolas Chaima',
            'email' => 'nikochaima72@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('207229865')
        ]);

        User::create([
            'name' => 'Admin Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin')
        ]);

        factory(User::class, 10)->create();
    }
}
