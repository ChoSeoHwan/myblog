<?php

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
        App\User::create([
            'name' => 'anyman',
            'email' => 'anyman@afreecatv.com',
            'password' => bcrypt('password'),
        ]);
    }
}
