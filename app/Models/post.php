<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\support\Str;

class post extends Model
{
    protected $fillable=['title','content','img_url','category_id '];

    public static function boot(){
        parent::boot();
        static::creating(function($post){
           $post->slug=Str::slug($post->title);

           $slug_count=post::where('slug',$post->slug)->count();
           if ($slug_count>0) {
            $post->slug.='-'.$slug_count;
           }
        });
    }

    protected function category(){
        return $this->belongsTo(Category::class);
      }
}
