@extends('layouts.app')
@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div><br/>
@endif
<form action="{{route('admin.posts.store')}}" method="post">
  @csrf
  {{-- INPUT TITLE --}}
  <div class="form-group">
    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci titolo" aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Inserisci il titolo del Post</small>
  </div>
  {{-- INPUT BODY --}}
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body" rows="3" required></textarea>
    <small class="text-muted">Scrivi qui il tuo Post</small>
  </div>
  {{-- BUTTON SUBMIT --}}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection