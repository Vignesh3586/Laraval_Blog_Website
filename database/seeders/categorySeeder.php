<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Technology',
            'Programming',
            'Health',
            'Travel',
            'Finance',
            'Education',
            'Lifestyle',
            'Business',
            'Science',
            'Entertainment',
        ];
        
        foreach($categories as $category_name){
            Category::create([
              'category_name'=>$category_name
            ]);
        }
        
    }
}
