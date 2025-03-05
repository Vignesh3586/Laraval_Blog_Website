<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Str;

class Category extends Model
{
    protected $fillable=['category_name','category_slug'];

    public static function boot(){
        parent::boot();
        static::creating(function($category){
            $category->category_slug=Str::slug($category->category_name);

            $slug_count=Category::where('category_slug',$category->category_slug)->count();
            if ($slug_count>0) {
             $category->category_slug='-'.$slug_count;
            }
        });
    }
}
