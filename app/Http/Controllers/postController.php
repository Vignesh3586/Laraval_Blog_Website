<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\post;

class postController extends Controller
{
    public function index(Request $request){
        // $title="Blog web app";
        $categories=Category::all();
        $query=post::query();

        if($request->has('search')&&!empty($request->search)){
           $query->where('title','like',"%".$request->search."%")->orWhere('content','like',"%".$request->search."%");
        }
        $posts=$query->paginate(6);
        return view('posts.index',compact('posts','categories'));
    }
    

    private function getPostById($slug){
      $post=post::where('slug',$slug)->first();
      if(!$post){
        throw new ModelNotFoundException;
      }
      return $post;
    }

    public function detail($slug){
       try{
        $post=$this->getPostById($slug);
        $related_posts=post::where('category_id',$post->category->id)->where('id',"!=",$post->id)->take(5)->get();
        return view('posts.detail',compact('post','related_posts'));
       }catch(ModelNotFoundException $ex){
        return view('error.404');
       }
       
    }
    


  public function about(){
    return view('posts.about');
  }

}
