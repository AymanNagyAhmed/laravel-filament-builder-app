<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('@12345Admin'),  // $2y$12$GZ8KWBS8RsgRTBPnzgWFReB7mz17tKt7f0Mu3Iz/xGtDbKmkRv2bu
            'is_admin' => true
        ]);
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('@12345Admin'),  // $2y$12$GZ8KWBS8RsgRTBPnzgWFReB7mz17tKt7f0Mu3Iz/xGtDbKmkRv2bu
            'is_admin' => false
        ]);
    }
}
