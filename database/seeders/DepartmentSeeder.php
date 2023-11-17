<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = array(
            array('id' => 1, 'team_id' => 1, 'name' => "laravel", 'created_at' => now(),'updated_at'=> now()),
            array('id' => 2, 'team_id' => 1, 'name' => "reactjs", 'created_at' => now(),'updated_at'=> now()),
            array('id' => 3, 'team_id' => 1, 'name' => "vuejs", 'created_at' => now(),'updated_at'=> now()),
            array('id' => 4, 'team_id' => 1, 'name' => "nextjs", 'created_at' => now(),'updated_at'=> now()),
            array('id' => 5, 'team_id' => 1, 'name' => "nuxtjs", 'created_at' => now(),'updated_at'=> now()),
        );

        DB::table('departments')->insert($departments);

    }
}
