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
        for ($i = 1; $i <= 10; $i++)
        {
            DB::table('users')->insert([
                'name' => "john doe {$i}",
                'email' => "john{$i}@doe.fr",
                'password' => bcrypt('1234')
            ]);
        }
    }
}
