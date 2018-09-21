<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms_skills')->truncate();
        for ($i = 0; $i < 100; $i++) {
            DB::table('cms_skills')->insert([
                "name"    => "Skills N'" . $i,
                "created_at" => now()
            ]);
        }
    
        DB::table('skills_users')->insert([
            "fk_user_id" => 1,
            "fk_skill_id" => rand(0,100),
            "created_at" => now()
        ]);
    }
}
