@extends('layouts.main')

@section('container')
    <h2>Post Categories</h2>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="/category/{{ $category->slug }}" class="text-decoration-none"><h4>{{ $category->name }}</h4></a>
            </li>
        @endforeach
    </ul>
@endsection