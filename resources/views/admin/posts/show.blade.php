@extends('layouts.dashboard')
@section('content')
<h3>Post with ID {{ $post->id }}</h3>
  
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
  
@endsection