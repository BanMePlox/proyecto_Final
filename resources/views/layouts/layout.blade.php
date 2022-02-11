<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <title>Juanadona</title>

</head>
<body>
    @include('layouts.partials.nav')
    @yield('body')
    @include('layouts.partials.footer')
</body>
</html>
