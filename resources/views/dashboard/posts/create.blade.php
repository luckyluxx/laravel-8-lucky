@extends('dashboard.layouts.main')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Posts</h1>
</div>

<div class="col-lg-10">
    <form action="/dashboard/posts" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

@endsection