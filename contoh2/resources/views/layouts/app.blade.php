<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    {{-- Frontend Styles --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    body {
    background-image: url('https://th.bing.com/th/id/R.acde9909f3eed72465a7dd2523ad6fae?rik=sZ2yA6uk%2f7Qdmg&riu=http%3a%2f%2fwww.colorhexa.com%2f6250c5.png&ehk=GaLm1hXDDsnbh3wGqwPESBmrDFz3B80ZfJuGC7iabac%3d&risl=&pid=ImgRaw&r=0');
    }
    .card-body{
    background-image: url('https://wallpapercave.com/wp/wp4756618.jpg');
    }
    .navbar{
    background-image: url('https://wallpapercave.com/wp/wp4756618.jpg');
    }
    </style>
 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 
    {{-- Frontend styles end --}}

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>
</html>
