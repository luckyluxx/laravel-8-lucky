<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- css bootstrap --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

    {{-- cssnya dashboard --}}
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">

    {{-- trix editor --}}
    <link rel="stylesheet" href="{{ url('css/trix.css') }}">

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
    <title>WPU Blog | Dashboard</title>
</head>
<body>

    @include('dashboard.layouts.header')

    <div class="container-fluid">
    <div class="row">

        @include('dashboard.layouts.sidebar')
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
    </div>


    {{-- feather --}}
    <script src="{{ url('js/feather.min.js') }}"></script>
    {{-- js bootstrap --}}
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    {{-- jsnya dashboard --}}
    <script src="{{ url('js/dashboard.js') }}"></script>
    {{-- trix js --}}
    <script src="{{ url('js/trix.js') }}"></script>

</body>
</html>