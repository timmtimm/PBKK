@extends('layouts.main')

@section('container')
    <h1>Post Category: {{ $category }}</h1>
    <br>
    @foreach ($posts as $post)
        <article class="pb-3 mb-5 border-bottom">
            <a href="/post/{{ $post->slug }}" class="text-decoration-none"><h2>{{ $post->title }}</h2></a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection