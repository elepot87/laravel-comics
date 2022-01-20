<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('head-title', 'DC Comics')</title>
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    {{-- Main style --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>
<body>
    @include('partials.header')

    <main>
       @yield('main-content')
    </main>

    @include('partials.footer')
</body>
</html>