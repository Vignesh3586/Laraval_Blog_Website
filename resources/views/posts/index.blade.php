  @extends('layouts.master')
  @section('content')
  <section class="main-container">
  <div class="category-container w-50">
        @foreach ( $categories as $category)
        <span class="m-1 p-2 text-white">{{$category->category_name}}</span>
        @endforeach
  </div>
  <div class="search-container">
    <div class="input-group">
       <div>
       </div>
      <form method="GET" action="{{route('posts.index')}}" class="form">
        <input class="input-search"  name="search" type="text" id="search-text" name="searchText" placeholder="Search..."/> 
        <button class="search-btn" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
  </section>
  <section class="post-section">
    @if (!empty($posts))
    @foreach ($posts as $post)
    <div class="post-container">
      <div class="post">
        <img src="{{$post->img_url}}" alt="alt" class="mx-auto my-1 my-md-2 image-thumbanil">
        <h3 class="text-truncate">{{$post->title}}</h3>
        <p class="d-inline-block post-content">{{$post->content}}</p>
        <div class="read-more">
        <a href="{{route('detail',['slug'=>$post->slug])}}">Read More</a>
        <span>{{$post->category->category_name}}</span>
        </div>
       
      </div>
    </div>
    @endforeach
    @else
    <p>No Posts Available</p>
    @endif
  </section>
  <div class="m-2 m-md-5">
    {{$posts->links('pagination::bootstrap-5')}}
  </div>
  @endsection