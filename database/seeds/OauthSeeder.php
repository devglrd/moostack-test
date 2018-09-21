<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OauthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->insert([
        //    "name"    => "Moostack",
        //    "email" => "moostack@gmail.com",
        //    "password" => bcrypt('password'),
        //    "age"    => 28,
        //    "country" => "France",
        //    "created_at" => now()
        //]);
        DB::table('oauth_clients')->insert([
            "user_id" => 1,
            "name" => "Laravel Personal Access Client",
            "secret" => unique_random("oauth_clients","secret"),
            "redirect" => "http://localhost:8000",
            "personal_access_client" => 1,
            "password_client" => 0,
            "revoked" => 0,
            "created_at" => \Carbon\Carbon::now()
        ]);
        
        for ($i = 0; $i < 100; $i++) {
            DB::table('oauth_clients')->insert([
                "user_id" => rand(2, 100),
                "name" => "Laravel Password Normal Client",
                "secret" => unique_random("oauth_clients","secret"),
                "redirect" => "http://localhost:8000",
                "personal_access_client" => 0,
                "password_client" => 1,
                "revoked" => 0,
                "created_at" => \Carbon\Carbon::now()
            ]);
        }
        
    }
}
