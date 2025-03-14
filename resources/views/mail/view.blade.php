@dd($data)
@extends('layouts.master')
@section('content')
<div>
    <p>{{$data['email']}}</p>
    <p>{{$data['message']}}</p>
</div>
@endsection