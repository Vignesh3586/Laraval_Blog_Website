@extends('layouts.master')
@section('content')
<div class="form-container">
  <h3 style="color: #fff;">Contact Form</h3>
  @if(session('status'))
  <div class="alert alert-success">{{session('status')}}</div>
  @endif
  <form class="contact" method="POST" action="{{route('sendmail')}}">
  @csrf
    <div >
      <input class="input-box" type="text" name="name" id="name" placeholder="Name">
      @error('name')
      <div  class="error">{{$message}}</div>
      @enderror
    </div>
    <div>
      <input class="input-box" type="text" name="email" id="email" placeholder="Email" >
      @error('email')
      <div  class="error">{{$message}}</div>
      @enderror
    </div>
    <div>
      <textarea class="msg-box" type="text" name="message" id="message" placeholder="Message"></textarea>
      @error('message')
      <div class="error">{{$message}}</div>
      @enderror
    </div>
    <button class="send-btn" name="submit" type="submit">
    SUBMIT 
        </button>
 
  </form>
</div>
@endsection