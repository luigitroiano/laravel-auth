@extends('layouts.dashboard')
@section('content')
<div style="display: flex; justify-content: space-between">
  <h1>All posts of the admin</h1>
  <a href="{{ route('admin.posts.create')}}" title="Create a new post" class="btn" style="color: white; background-color: black; margin: 0.5rem 0; height: fit-content;;">New Post</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>SLUG</th>
      <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
      <tr>
        <td scope="row">{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->slug }}</td>
        <td>
          <a href="{{ route('admin.posts.show', ['post'=>$post->slug] )}}" title="Show" class="btn btn-primary"><i class="fas fa-eye"></i></a>
          <a href="#" title="Edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
          <a href="#" title="Delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection