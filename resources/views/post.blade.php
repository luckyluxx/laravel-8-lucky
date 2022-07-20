@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center my-2">
            <div class="col-md-8 mb-4">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <h5>Author : <a href="/posts?author={{ $post->authr->username }}" class="link-dark text-decoration-none">{{ $post->authr->name }}</a></h5>
                <p>Posted in <b><a href="/posts?category={{ $post->category->slug }}" class="link-dark text-decoration-none">{{ $post->category->name }}</a></b></p>
                <br>
                <div class=""  style="background-color:rgb(205, 205, 205); height:300px;">
                    {{-- <img src="https://source.unsplash.com/900x300?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="image-fluid"> --}}
                </div>

                <article class="my-3 ">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="link-secondary">Back to posts</a>
            </div>
        </div>
    </div>
@endsection