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

    <main class="cuerpo">
        <h2>Bienvenido</h2>
        <p>En este menu podra llevar a cabo las tareas necesarias como Administrador web</p>
        <div class="contenedor__admin">
            <div class="adm__opc">
                <img class="admin__image" src="{{URL::asset('Imagenes/admin_usu.jpg')}}" alt="Imagen admin usuarios">
                <div>
                    <h2>Administracion de usuarios</h2>
                    <p>Desde esta ventana podra administrar y observar los usuario que hay registrados en la página.</p>
                    <a href="{{Route('Usuarios')}}" class="boton__index-admin">Acceder</a> <br>
                </div>
            </div>
            <div class="adm__opc">
                <img class="admin__image" src="{{URL::asset('Imagenes/stock.jfif')}}" alt="Imagen admin usuarios">
                <div>
                    <h2>Gestion de stock</h2>
                    <p>Desde esta ventana podra administrar y comprobar el stock actual, los mas vendidos y los menos vendidos</p>
                    <a href="{{Route('Stock')}}" class="boton__index-admin">Acceder</a>
                </div>
            </div>
            <div class="adm__opc">
                <img class="admin__image" src="{{URL::asset('Imagenes/prod.png')}}" alt="Imagen admin usuarios">
                <div>
                    <h2>Administracion de productos</h2>
                    <p>Desde esta ventana podra administrar los productos disponibles y añadir otros nuevos</p>
                    <a href="{{Route('Productos')}}" class="boton__index-admin">Acceder</a> <br>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

