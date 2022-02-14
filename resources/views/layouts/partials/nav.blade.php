<header>
    <nav class="cabecera">
        <a href="{{route('products.index')}}"><img src="{{URL::asset('Imagenes/logoJuanadona.png')}}" alt="Logo" id="logo"></a>
        <div id="buscador">
            <form action="">
            <img src="{{URL::asset('Imagenes/lupa.png')}}" alt="lupa">
            <input type="text" placeholder="Busca tus productos">
            </form>
        </div>
        <div class="linea__media">
            <a href="{{route('categories.index')}}">Categorias</a>
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Registrate</a>
            <a href="#" id="cart"><img src="{{URL::asset('Imagenes/carroVacio.png')}}" alt="carrito" id="carro"></a>
        </div>

    </nav>
</header>
<hr>
