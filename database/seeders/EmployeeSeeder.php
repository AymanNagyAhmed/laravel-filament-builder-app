<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $emps = array(
            array(
                "id" => 1,
                "team_id" => 1,
                "country_id" => 2,
                "state_id" => 107,
                "city_id" => 6078,
                "department_id" => 1,
                "first_name" => "ayman",
                "last_name" => "nagy",
                "middle_name" => "ahmed",
                "address" => "alexandia",
                "zip_code" => "000",
                "date_of_birth" => "2013-11-01",
                "date_hired" => "2023-11-02",
                "created_at" => now(),
                "updated_at" => now()
            ),
        );
        DB::table('employees')->insert($emps);
    }
}
