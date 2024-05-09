<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::create([
            "name" => "Computer",
            "slug" => "dell",
        ]);
        Categories::create([
            "name" => "Phone",
            "slug" => "sony",
        ]);
        Categories::create([
            "name" => "Watch",
            "slug" => "samsung",
        ]);
        Categories::create([
            "name" => "Computer",
            "slug" => "lenovo",
        ]);
    }
}
