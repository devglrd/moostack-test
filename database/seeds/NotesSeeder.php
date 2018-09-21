<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms_evaluations')->truncate();
        for ($i = 0; $i < 100; $i++) {
            DB::table('cms_evaluations')->insert([
                "name"    => "Evalution numéro N'" . $i,
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquid amet aperiam at blanditiis, dignissimos dolorem earum incidunt ipsum magnam minima porro possimus, rem repellat suscipit ullam velit voluptate." . $i,
                "fk_user_id" => rand(1, 100),
                "note" => rand(1, 20),
                "created_at" => now()
            ]);
        }
    }
}
