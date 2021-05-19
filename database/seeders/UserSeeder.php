<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Admin",
            "prenom" => "admin",
            "age" => 26,
            "avatar_id" => 1,
            "role_id" => 1,
            "email" => "admin@admin.be",
            "password" => Hash::make("admin1"),
        ]);
    }
}
