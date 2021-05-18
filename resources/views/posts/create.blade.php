@extends('layouts.app')

@section('title', 'Inserimento nuovo post')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
@endif

<form action="{{ route('posts.store') }} " method="post">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>

    <div class="form-group">
      <label for="subtitle">Subtitle</label>
      <input type="text" class="form-control" id="subtitle" name="subtitle">
    </div>

    <div class="form-group">
        <label for="image">Image Url</label>
        <input type="text" class="form-control" id="image" name="image">
      </div>

    <div class="form-group">
        <label for="content">Content:</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" id="author" name="author">
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <input type="text" class="form-control" id="category" name="category">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>

  </form>


@endsection