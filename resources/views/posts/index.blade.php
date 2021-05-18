@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    @foreach ($posts as $post)
        @dump($post)
    @endforeach
@endsection