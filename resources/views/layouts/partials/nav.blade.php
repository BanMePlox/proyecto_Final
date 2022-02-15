
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
                        <li><a href="#" onclick="elegirCategoria(id=1)">Pescaderia</a></li>
                        <li><a href="#" onclick="elegirCategoria(id=2)">Carniceria</a></li>
                        <li><a href="#" onclick="elegirCategoria(id=3)">Panaderia</a></li>
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
<script>
   async function elegirCategoria(id) {
    let response = await fetch('api/products/' + id);
    let products = await response.json();
    //Elimina los productos mostrados
    const eliminarArticle= document.querySelector('article');
    eliminarArticle.remove();
    //Recoge el main
    let main = document.querySelector('main');
    //Crea un article y lo añane dentro del main.
    let crearArticle = document.createElement('article');
    main.append(crearArticle);
    //Crea una seccion y la añade dentro del article
    const section = document.createElement('section');
    section.classList.add('mas__vendidos');
    crearArticle.append(section);
    //Crea el primer div que es el contenedor.
    let div2 = document.createElement('div');
    div2.classList.add('producto');
    section.append(div2);
    //Recorre el bucle de productos.
    products.forEach((producto) => {
        //Crea el div donde van el titulo, la imagen, el precio.
        let div = document.createElement('div');
        div.classList.add('producto__texto');
        let h3 = document.createElement('h3');
        h3.textContent = producto.name;
        const boton = document.createElement('button');
        boton.classList.add('btn', 'btn-primary', 'btn__producto');
        boton.textContent = "Añadir al carrito";
        boton.addEventListener('click', function() {
            carrito.push(producto.id);
            actualizarCarrito();
        });
        div2.append(div);
        div.append(h3);
        div.append(boton);
    })
};

</script>
