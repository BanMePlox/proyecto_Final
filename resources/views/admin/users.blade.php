<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="{{URL::asset('css/styleAdmin.css')}}">
</head>
<body>
    <header class="cabecera">
        <a href="{{route('products.index')}}"><img src="{{URL::asset('Imagenes/logoJuanadona.png')}}" alt="Logo" id="logo"></a>
        <a href="{{route('indexadmin')}}">Admin menu</a>
    </header>

    <main>
        <table class="tabla">
            <tr class="cabecera__tabla">
                <td>Foto de perfil</td>
                <td>ID usuario</td>
                <td>Nombre completo</td>
                <td>Nombre de perfil</td>
                <td>Email</td>
                <td>ROL</td>
            </tr>
            @forelse ($users as $user)
            <tr>
                <td><img class="Imagen__Producto" src="{{Storage::url($user->profile_photo_path)}}" alt="fotoperfil"></td>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                @if ($user->admin == 1)
                <td>Administrador</td>
                @else
                <td>Usuario</td>
                @endif
            </tr>
            @empty
            No hay usuarios registrados
            @endforelse
        </table>
    </main>
</body>
</html>

