@extends('layouts.main')

@section('container')
  <h1>Posts Page</h1>
  <br />
  @foreach ($posts as $post)
    <article class="pb-3 mb-5 border-bottom">
      <a href="/post/{{ $post->slug }}" class="text-decoration-none"><h3>{{ $post->title }}</h3></a>
      <span>Created by: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></span>
      <br />
      <span>Category: <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></span>
      <p>{{ $post->excerpt }}</p>
      <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
    </article>
  @endforeach
@endsection