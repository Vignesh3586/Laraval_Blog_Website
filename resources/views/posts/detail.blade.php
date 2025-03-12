@extends('layouts.master')
@section('content')
   <div class="detail-post p-4 float-start">
      <h3 class="p-2 text-white">created at {{$post->created_at->format('M d,Y')}}</h3>
       <h2 class="p-2 text-white">{{$post->title}}({{$post->category->category_name}})</h2>
       <img  src="{{$post->img_url}}" alt="{{$post->slug}}"  class="m-2 post-detail-img">
       <div class="p-2 text-white">{{$post->content}}</div>
       </div>
       <div class="float-end related-post  p-2">
       <h4 class="text-white">Related Posts</h4>
       <ul class="list-group">
       @foreach ($related_posts as $post)
        <li class="text-white list-group-item bg-transparent border-0"><a href="{{route('detail',['slug'=>$post->slug])}}" class="text-white text-decoration-none">{{$post->title}}</a></li>          
       @endforeach
       </ul>
       </div>
@endsection