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
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('$2y$10$IlUlEUPKHun7z.4u.H8eP.gEJiJk4L14HklugypkDR3PxfFnF9Ck2'),
        ]);
    }
}
