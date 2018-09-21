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
        // $this->call(UsersTableSeeder::class);
        $this->call(EventsSeeder::class);
        $this->call(NotesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(OauthSeeder::class);
    }
}
