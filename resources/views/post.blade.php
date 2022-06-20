@extends('layouts.main')

@section('content')

    <article class="mb-4">
        <h2>{{ $post["title"] }}</h2>
        <h5>Auth : {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/posts" class="link-secondary">Back to posts</a>
@endsection