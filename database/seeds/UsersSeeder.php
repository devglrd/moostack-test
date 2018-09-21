<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
                "name"    => "User N'" . $i,
                "email" => "user" . $i . "@gmail.com",
                "password" => bcrypt('password'),
                "age"    => $i,
                "country" => "France ".$i,
                "created_at" => now()
            ]);
        }
    }
}
