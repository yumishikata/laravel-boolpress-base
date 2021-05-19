@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <a href="{{route('posts.create') }}" class="btn btn-primary btn-lg">Inserisci un nuovo post</a>
    @foreach ($posts as $post)
        <div>
            <h1>{{ $post['title'] }}</h1>
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Visualizza</a>

            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Modifica</a>
            
            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button type='submit' class="btn btn-danger">Elimina</button>
            </form>
        </div>
    @endforeach
@endsection