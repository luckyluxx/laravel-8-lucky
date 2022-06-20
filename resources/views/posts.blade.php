@extends('layouts.main')

@section('content')
  @foreach ($posts as $post)
  
  <article class="mb-4">

    <h2>
      <a href="/posts/{{ $post["slug"] }}" class="link-dark">{{ $post["title"] }}</a>
    </h2>
    <h5>Auth : {{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>

  </article>
      
  @endforeach

@endsection