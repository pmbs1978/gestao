<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project 2 - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-5-3/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <script src="{{ asset('css/bootstrap-5-3/js/bootstrap.bundle.js') }}" defer></script>
</head>
<body>
    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>
