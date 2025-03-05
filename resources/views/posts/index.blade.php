@extends('layouts.master')
@section('content')
<div class="w-100 d-flex justify-content-between p-3 px-md-5" style="height: 10vh;">
        <h2>Latest Posts</h2>
        <div class="input-group w-50">
          <form  method="GET" action="{{route('posts.index')}}">
        <input class="form-control p-1" name="search" type="text" id="search-text" name="searchText" placeholder="Search"/>
        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
        </form>
        </div>
      </div>

  <section class="d-flex justify-content-start align-items-center flex-wrap">
    @if (!empty($posts))
       @foreach ($posts as $post)
            <div class="card m-3 p-3">
                <h3 class="card-title">{{$post->title}}</h3>
                <img class="card-img" src="{{$post->img_url}}" alt="alt">
                <span class="card-body">{{$post->content}}</span>
                <a href="{{route('detail',['slug'=>$post->slug])}}">Read More</a>
                <span>{{$post->category->category_name}}</span>
            </div>
       @endforeach
    @else
         <p>No Posts Available</p>
    @endif
     <div>
      {{$posts->links('pagination::bootstrap-5')}}
     </div>
  </section>
@endsection

