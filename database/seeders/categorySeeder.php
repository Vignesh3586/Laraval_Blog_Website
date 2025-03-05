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
            "Tech & Programming",
            "Personal Development",
            "Finance & Money Management",
            "Health & Wellness",
            "Lifestyle & Travel",
            "Education & Learning",
            "Business & Entrepreneurship",
            "Entertainment & Pop Culture",
            "Science & Innovation",
            "DIY & How-To Guides"
        ];
        
        foreach($categories as $category_name){
            Category::create([
              'category_name'=>$category_name
            ]);
        }
        
    }
}
