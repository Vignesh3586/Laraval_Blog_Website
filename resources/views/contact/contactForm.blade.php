@extends('layouts.master')
@section('content')
<div class="min-vh-100 min-vw-100 bg-secondary bg-gradient">
  <h3>Contact Form</h3>
  @if(session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
  @endif
  <form class="border border-rounded m-1 m-md-3 m-lg-5" method="GET" action="{{route('submitContact')}}">
      <div class="form-group p-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-group p-2">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" id="email" class="form-control">
        @error('email')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-group p-2">
        <label for="message" class="form-label">Message</label>
        <textarea type="text" name="message" id="message" class="form-control"></textarea>
        @error('message')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <button name="submit" type="submit" class="btn btn-primary m-2  w-"><a class="text-white text-decoration-none" href="{{route('submitContact')}}">
        Submit</a>
      </button>
      @csrf
  </form>
</div>
@endsection