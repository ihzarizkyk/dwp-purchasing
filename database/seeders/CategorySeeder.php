<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            "name" => "IT"]);

        DB::table("categories")->insert([
            "name" => "Finance"]);

        DB::table("categories")->insert([
            "name" => "People"]);

        DB::table("categories")->insert([
            "name" => "Operation"]);

        DB::table("categories")->insert([
            "name" => "Business"]);
    }
}
