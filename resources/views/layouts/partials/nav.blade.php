<header>
    <nav class="cabecera">
        <img src="{{URL::asset('Imagenes/logoJuanadona.png')}}" alt="Logo" id="logo">
        <div id="buscador">
            <form action="">
            <img src="{{URL::asset('Imagenes/lupa.png')}}" alt="lupa">
            <input type="text" placeholder="Busca tus productos">
            </form>
        </div>
        <div class="linea__media">
            <a href="#">Categorias</a>
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Registrate</a>
            <img src="{{URL::asset('Imagenes/carroVacio.png')}}" alt="carrito" id="carro">
        </div>
    </nav>
</header>
<hr>
