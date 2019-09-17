<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'admin',
            'password' => bcrypt('$2y$12$fr7LLaZvFJm2af1edyX52e7W5sUJVwzoGFjC2xNbzjI2IQn4Gt/2S'),
        ]);
    }
}
