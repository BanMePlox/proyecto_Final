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
            <form action="">
            <img src="{{URL::asset('Imagenes/lupa.png')}}" alt="lupa">
            <input type="text" placeholder="Busca tus productos">
            </form>
        </div>
        <div class="linea__media">
            <ul> <a href="#">Categorias</a>
            </ul>
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Registrate</a>
            <button href="#" id="cart"><img src="{{URL::asset('Imagenes/carroVacio.png')}}" alt="carrito" id="carro"></button>
        </div>

    </nav>
</header>
<hr>
