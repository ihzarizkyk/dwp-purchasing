<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name" => "admin",
            "email" => "admin@company.com",
            "role_id" => 1,
            "password" => Hash::make("admin123")]);

        DB::table("users")->insert([
            "name" => "employee",
            "email" => "emp@company.com",
            "role_id" => 2,
            "password" => Hash::make("emp12345")]);

        DB::table("users")->insert([
            "name" => "purchasing1",
            "email" => "p1@company.com",
            "role_id" => 3,
            "password" => Hash::make("p1234567")]);

        DB::table("users")->insert([
            "name" => "vendor1",
            "email" => "ven1@company.com",
            "role_id" => 4,
            "password" => Hash::make("v1234567")]);
    }
}
