<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'name' => 'Admin ',
            'email' => 'airjakedelivery@gmail.com',
            'password' => Hash::make('airjake@1990'),
            'created_at' => now(),
            'updated_at' => now(),
            'status' => 'active',
            'is_verified' => 'yes',
        ]);
    }
}
