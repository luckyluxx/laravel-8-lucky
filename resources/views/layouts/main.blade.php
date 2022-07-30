<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

    {{-- stylekuh --}}
    <link rel="stylesheet" href="{{ url('css/stylekuh.css') }}">
    <script src="https://kit.fontawesome.com/37c7b28cb3.js" crossorigin="anonymous"></script>
    <title>Lucky Personal Site | {{ $title }}</title>
</head>
<body>

    @include('partials.navbar')
      
    <div class="container mt-4">
       @yield('content')
    </div>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>