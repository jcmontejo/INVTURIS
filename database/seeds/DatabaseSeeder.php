<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Daniel',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
