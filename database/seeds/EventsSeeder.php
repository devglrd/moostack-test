<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms_events')->truncate();
        for ($i = 0; $i < 100; $i++) {
            DB::table('cms_events')->insert([
                "name"    => "Evenement N'" . $i,
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquid amet aperiam at blanditiis, dignissimos dolorem earum incidunt ipsum magnam minima porro possimus, rem repellat suscipit ullam velit voluptate." . $i,
                "date"    => now(),
                "fk_user_id" => rand(1, 5),
                "created_at" => now()
            ]);
        }
    }
}
