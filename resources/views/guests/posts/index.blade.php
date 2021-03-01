@extends('layouts.app')
@section('content')
  <h1>Blog</h1>
  @foreach ($posts as $post)
    <div class="card mb-4">
      <div class="card-body">
        <a href="{{ route('blog.show', ['post'=>$post->slug] )}}">
          <h4 class="card-title">{{$post->title}}</h4>
        </a>
        <p class="card-text">{{$post->body}}</p>
      </div>
    </div>
  @endforeach
@endsection