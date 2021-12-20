{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <article>
        @foreach ($posts as $post)
            <h2>{{ $post->title }}</h2>
            {{-- <h5>By : {{ $post["author"] }}</h5> --}}
            <p>{{ $post->excerpt }}</p>
            ... <a href="/blog/{{ $post->id }}">Read More</a>
        @endforeach
    </article>
@endsection

