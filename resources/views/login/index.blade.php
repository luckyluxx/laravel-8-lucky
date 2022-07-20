@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show " role="alert">
                    {{ session('success') }}
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                {{ session('loginError') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('loggedOut'))
            <div class="alert alert-warning alert-dismissible fade show " role="alert">
                {{ session('loggedOut') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 my-4 fw-normal text-center">Please login</h1>
                    <form action="/login" method="POST">
                        @csrf

                        <div class="form-floating mb-0">
                            <input type="email" class="form-control rounded-top @error('email') is-invalid @enderror" name="email" id="email" placeholder="email@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-0">
                            <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="password" required>
                        <label for="password">Password</label>
                        </div>
                    
                        <button class="w-100 btn btn-lg btn-primary my-2" type="submit">Login</button>
                        <small class="d-block text-center my-2">
                            Doesnt have one?
                            <a href="/register" class="link-primary text-decoration-none">  Register now it is free!!</a>
                        </small>
                    </form>
            </main>           
        </div>
    </div>
    @endsection