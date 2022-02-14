<script>
         /* async function f() {
            let response = await fetch('api/categories', {
        method: 'GET'
      });

      let result = await response.json();

             let ul = document.querySelector('ul');

for(let i=0; i<result.length; i++){
    let li = document.createElement('li');
    li.textContent = result[i].name;
ul.append(li);
}

}
f();*/
</script>

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
                        <li><a href="#">Pescado</a></li>
                        <li><a href="#">Carne</a></li>
                        <li><a href="#">Pescado</a></li>
                        <li><a href="#">Carne</a></li>
                        <li><a href="#">Pescado</a></li>
                        <li><a href="#">Carne</a></li>
                    </ul>
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
