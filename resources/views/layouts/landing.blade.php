<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    
</head>
<body>
    @include('layouts._partials.menu')
    <main>
        @yield('content')
    </main>
    
</body>
</html>