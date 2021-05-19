@extends('layouts.app')

@section('title', 'Home')
    
@section('content')
    BENVEUTO IN Boolpress

    <a href="{{ route('posts.index') }} " class="btn btn-primary btn-lg">Entra</a>
@endsection