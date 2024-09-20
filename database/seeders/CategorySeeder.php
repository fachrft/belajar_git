<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'web design',
            'slug' => 'web-design',
            'color' => 'red',
        ]); 

        Category::create([
            'name' => 'programming',
            'slug' => 'programming',
            'color' => 'blue',
        ]); 

        Category::create([
            'name' => 'data science',
            'slug' => 'data-science',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'machine learning',
            'slug' => 'machine-learning',
            'color' => 'yellow',
        ]); 
    }
}
