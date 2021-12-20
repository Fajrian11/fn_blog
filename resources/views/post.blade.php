@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2> {{-- tag tag html tidak digunakan --}}
        {{-- <h5>By: {{ $post["author"] }}</h5> --}}
        {!! $post->body !!} {{-- escape character(tag tag html digunakan) --}}
    </article>

    <a href="/blog">Back to BLog</a>
@endsection
