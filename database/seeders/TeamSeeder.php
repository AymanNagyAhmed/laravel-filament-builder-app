<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = array(
            array('id'=>1,'name' => "backend", 'slug'=>'backend', 'created_at' => now(),'updated_at'=> now()),
        );
        DB::table('teams')->insert($teams);

    }
}
