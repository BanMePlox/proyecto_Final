<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fetch</title>
</head>
<body>
<header>
<nav class="cabecera">
   <a href="{{route('products.index')}}"><img src="{{URL::asset('Imagenes/logoJuanadona.png')}}" alt="Logo" id="logo"></a>
   <div id="buscador">
       <form action="" id="busqueda">
       <img src="{{URL::asset('Imagenes/lupa.png')}}" alt="lupa">
       <input type="text" placeholder="Busca tus productos">
       </form>
   </div>
       <ul id="linea__media">
           <li><a href="#">Categorias ▼</a>
               <ul id="desplegable">
                   <!--Generar lis dentro de este ul-->
                   <li><a href="#" >Pescado</a></li>
                   <li><a href="#" onclick="elegirCategoria(id=2)">Fruta</a></li>
           </li>
           <li><a href="#">Identificate ▼</a>
               <ul id="desplegable">
                   <li><a href="{{route('login')}}">Login</a></li>
                   <li><a href="{{route('register')}}">Registrate</a></li>
               </ul>
           </li>
           <li><button href="#" id="cart"><img src="{{URL::asset('Imagenes/carroVacio.png')}}" alt="carrito" id="carro"></button></li>
       </ul>
</nav>
</header>
<hr>
<script>

</script>
</body>
</html>
