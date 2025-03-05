@extends('layouts.master')
@section('content')
   <div class="min-vh-100 min-vw-100 bg-light p-4">
      <h3 class="m-2">created at {{$post->created_at->format('M d,Y')}}</h3>
       <h2 class="m-2">{{$post->title}}({{$post->category->category_name}})</h2>
       <img src="{{$post->img_url}}" alt=""  class="h-50 w-75 m-2">
       <div class="m-2">{{$post->content}}</div>
       <h4>Related Posts</h4>
       <ul>
       @foreach ($related_posts as $post)
        <li>{{$post->title}}</li>          
       @endforeach
       </ul>
   </div>
@endsection