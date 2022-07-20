@extends('layouts.main')

@section('content')

  <h1 class="mb-4 text-center">{{ $title }}</h1>

  <div class="row justify-content-center my-3">
    <div class="col-md-8">
      <form action="/posts">

        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="authr" value="{{ request('authr') }}">
        @endif

        <div class="input-group mb-3 ">
          <input type="text" class="form-control px-3" placeholder="Search..." name="search" id="" value="{{ request('search') }}">
          <button class="btn btn-dark" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())

  <div class="card mb-3">
    <div class="cardheader"  style="overflow:hidden; background-color:rgb(205, 205, 205); height:400px;">
      <img src="https://source.unsplash.com/900x500?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    </div>
    <div class="card-body text-center">
      <a href="/posts/{{ $posts[0]->slug }}" class="link-dark text-decoration-none">
      <h3 class="card-title">
        {{ $posts[0]->title }}
      </h3>
      </a>
      
      <p>
      <small>
        By <b><a href="/posts?author={{ $posts[0]->authr->username }}" class="link-dark text-decoration-none"> {{ $posts[0]->authr->name }} </a></b>
        Posted in <b><a href="/posts?category={{ $posts[0]->category->slug }}" class="link-dark text-decoration-none">{{ $posts[0]->category->name }}</a></b>
        {{ $posts[0]->created_at->diffForHumans()}}
      </small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary p-2">Read More</a>
      
    </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
    
      <div class="col-md-4 mb-4">
        <div class="card">
          <a href="/posts?category={{ $post->category->slug }}">
          <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0,0,0,0.6); border-radius: 0px 2px 4px 2px;">
            {{ $post->category->name }}
          </div>
          </a>
          <div class="cardheader"  style="overflow:hidden; background-color:rgb(181, 180, 180); height:450px;">
            {{-- <img src="https://source.unsplash.com/500x450?{{ $post->category->name }}"" alt="{{ $post->category->name }}"> --}}
          </div>
          <div class="card-body">
            <a href="/posts/{{ $post->slug }}" class="link-dark text-decoration-none">
            <h5 class="card-title">
              {{ $post->title }}
            </h5>
          </a>
            <small>
              By : <b><a href="/posts?author={{ $post->authr->username }}" class="link-dark text-decoration-none"> {{ $post->authr->name }} </a></b>
              {{ $post->created_at->diffForHumans()}}
            </small>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>

  @else
  
  <p class="text-center fs-3">Nothing posted yet.</p>
  @endif

@endsection