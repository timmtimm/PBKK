@extends('layouts.main')

@section('container')
    <article>
        <h1 class="mb-5">{{ $post->title }}</h1>
        <span>Created by: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></span>
        <br />
        <span>Category: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></span>
        <br />
        <br />
        {!! $post->body !!}
        <a href="/posts" class="text-decoration-none"><p>Back to Posts</p></a>
    </article>
@endsection