<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("vendors")->insert([
            "name" => "Company ABC",
            "address" => "Surabaya",
            "contact" => 123456789]);

        DB::table("vendors")->insert([
            "name" => "Company BAC",
            "address" => "Jakarta",
            "contact" => 123456789]);

        DB::table("vendors")->insert([
            "name" => "Company CDE",
            "address" => "Semarang",
            "contact" => 123456789]);
    }
}
