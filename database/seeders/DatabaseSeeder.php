<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Category::create(['name' => 'Technology', 'active' => true]);
        Category::create(['name' => 'Health', 'active' => true]);
        Category::create(['name' => 'Lifestyle', 'active' => false]);

        Tag::create(['name' => 'PHP', 'active' => true]);
        Tag::create(['name' => 'Laravel', 'active' => true]);
        Tag::create(['name' => 'JavaScript', 'active' => false]);
    }
}
