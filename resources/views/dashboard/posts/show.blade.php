@extends('dashboard.layouts.main')
@section('content')
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-10 mb-4">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <div class="">

                    <a href="/dashboard/posts" class="btn btn-secondary mr-2">
                        <span data-feather="arrow-left-circle"></span>
                        Back to all my posts
                    </a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mx-2">
                        <span data-feather="edit"></span>
                        Edit 
                    </a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf

                        <button class=" btn btn-danger" onclick="return confirm('Are you sure?')">
                            <span data-feather="trash"></span> Delete
                        </button>
                      </form>

                </div>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @else
                    <div class=" mt-3"  style="background-color:rgb(205, 205, 205); height:300px;">
                        <img src="https://source.unsplash.com/900x300?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                @endif

                <article class="my-3 ">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection