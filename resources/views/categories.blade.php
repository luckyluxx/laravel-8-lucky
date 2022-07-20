@extends('layouts.main')

@section('content')

  <h2 align="center" class="mb-3 link-secondary">Post Categories</h2>

  <div class="container">
    <div class="row">
      @foreach ($categories as $category)

      <div class="col-md-4 mb-4">
        <a href="/posts?category={{ $category->slug }}">
        <div class="card bg-dark text-white">
          <div class="cardheader"  style="overflow:hidden; background-color:rgb(205, 205, 205); height:450px;">
            {{-- <img src="https://source.unsplash.com/450x600?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}"> --}}
          </div>
          <div class="card-img-overlay d-flex align-items-center p-0">
            <h5 class="card-title text-center flex-fill py-1" style="background-color: rgba(0, 0, 0, 0.5)">
              {{ $category->name }}
            </h5>
          </div>
        </div>
        </a>
      </div>

      @endforeach
    </div>
  </div>
  <br>
  <a href="/posts" class="link-secondary">Back to posts</a>
@endsection