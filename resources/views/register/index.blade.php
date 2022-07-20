@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-registration">
                <h1 class="h3 my-4 fw-normal text-center">Please register</h1>
                    <form action="/register" method="POST">                          
                        @csrf

                        <div class="row my-2">
                            <div class="form-floating mb-0 col-md-7">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required placeholder="name">
                                <label for="name">Name</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-0 col">
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username') }}" required placeholder="username">
                                <label for="username">Username</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-floating mb-0 my-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required placeholder="email@example.com">
                            <label for="email">Email address</label>
                            @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                        <div class="form-floating mb-0 my-2">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required placeholder="password">
                            <label for="password">Password</label>
                            @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    
                        <button class="w-100 btn btn-lg btn-primary my-2" type="submit">Sign Up</button>
                        <small class="d-block text-center my-2">
                            Already have one?
                            <a href="/login" class="link-primary text-decoration-none">  Login here</a>
                        </small>
                    </form>
            </main>           
        </div>
    </div>
    @endsection