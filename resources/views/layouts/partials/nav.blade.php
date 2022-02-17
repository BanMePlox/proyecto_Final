
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
                        <li><a href="#" onclick="elegirCategoria(1)">Pescaderia</a></li>
                        <li><a href="#" onclick="elegirCategoria(2)">Carniceria</a></li>
                        <li><a href="#" onclick="elegirCategoria(3)">Panaderia</a></li>
                    </ul>
                </li>
                @if(!Auth::check())
                <li><a href="#">Identificate ▼</a>
                    <ul id="desplegable">
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Registrate</a></li>
                    </ul>
                </li>
                @else
                    @if (Auth::user()->admin == 1)
                        <li><a href="{{route('indexadmin')}}">Administración</a></li>
                        <li><a href="{{route('profile.show')}}">Gestión de usuario</a></li>
                    @endif
                    @if (Auth::user()->admin == 0)
                        <li><a href="{{route('profile.show')}}">Gestión de usuario</a></li>
                    @endif


                @endif

               <li>
                    <button href="#" id="cart">
                        <a href="{{route('carrito')}}"><img src="{{URL::asset('Imagenes/carroVacio.png')}}" alt="carrito"></a>
                    <p id="carro"></p>
                    </button>
                </li>
            </ul>
    </nav>
</header>
<hr>

<script>

let carrito = [];
let productosCarrito = 0;
let idProdoductosMostrados = 0;
let products;
let productosMostrados = [];

async function elegirCategoria(id) {
    idProdoductosMostrados = 0;
    console.log(id);
    let response = await fetch('api/products/' + id);
    products = await response.json();
    //Elimina los productos mostrados
    const eliminarArticle = document.querySelector('article');
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
    //Recorre el bucle de productos.
    products.forEach((producto) => {
        if (idProdoductosMostrados < 20) {
            //Crea el primer div que es el contenedor.
            let divExterior = document.createElement('div');
            divExterior.classList.add('producto');
            section.append(divExterior);
            //Crea el div donde van el titulo, la imagen, el precio.
            let div = document.createElement('div');
            div.classList.add('producto__texto');
            let a = document.createElement('a');
            let img = document.createElement('img');
            let precio = document.createElement('p');
            let descripcion = document.createElement('p');
            let nombre_producto = document.createElement('p');
            nombre_producto.classList.add('nombre_producto');
            precio.classList.add('precio');
            img.classList.add("imagen__producto");
            descripcion.classList.add('descripcion');
            nombre_producto.textContent = producto.name;
            precio.textContent = producto.price + "€";
            descripcion.textContent = producto.description;
            img.src = `../Imagenes/${producto.name}.webp`;
            divExterior.append(a);
            a.append(div);
            div.append(img);
            div.append(nombre_producto);
            div.append(descripcion);
            div.append(precio);
            let divBoton = document.createElement('div');
            divBoton.classList.add('boton');
            divExterior.append(divBoton);
             const aProducto = document.createElement('a');
            aProducto.href = 'products/'+producto.id;
            aProducto.textContent ='Link Producto';
            div.append(aProducto);
            const boton = document.createElement('button');
            boton.classList.add('btn', 'btn-primary', 'btn__producto');
            boton.textContent = "Añadir al carrito";
            boton.addEventListener('click', function() {
                carrito.push(producto.id);
                actualizarCarrito();
            });
            divBoton.append(boton);
            idProdoductosMostrados++;
            productosMostrados.push(producto.id);
        }
    })

    const verMas = document.createElement('button');
    verMas.textContent = 'Ver mas';
    verMas.classList.add('btnVerMas');
    verMas.addEventListener('click', function() {
        mostrarMasProductos();
    });
    section.append(verMas);

};

async function mostrarMasProductos() {
    idProdoductosMostrados = 0;
    let result = false;
    const section = document.querySelector('section');
    const verMasAntiguo = document.querySelector('.btnVerMas');
    verMasAntiguo.remove();
    for (let id of productosMostrados) {
        for (let p = 0; p <= products.length; p++) {
            if (products[p].id === id) {
                products.splice(p, 1);
                break;
            } else {
                p++;
            }

        }
    }
    products.forEach((producto) => {
        if (idProdoductosMostrados < 20) {
            //Crea el primer div que es el contenedor.
            let divExterior = document.createElement('div');
            divExterior.classList.add('producto');
            section.append(divExterior);
            //Crea el div donde van el titulo, la imagen, el precio.
            let div = document.createElement('div');
            div.classList.add('producto__texto');
            let a = document.createElement('a');
            let precio = document.createElement('p');
            let img = document.createElement('img');
            let descripcion = document.createElement('p');
            let nombre_producto = document.createElement('p');
            nombre_producto.classList.add('nombre_producto');
            precio.classList.add('precio');
            descripcion.classList.add('descripcion');
            img.classList.add("imagen__producto");
            nombre_producto.textContent = producto.name;
            precio.textContent = producto.price + "€";
            descripcion.textContent = producto.description;
            img.src = `../Imagenes/${producto.name}.webp`;
            divExterior.append(a);
            a.append(div);
            div.append(img);
            div.append(nombre_producto);
            div.append(descripcion);
            div.append(precio);
            let divBoton = document.createElement('div');
            divBoton.classList.add('boton');
            divExterior.append(divBoton);
            const aProducto = document.createElement('a');
            aProducto.href = 'products/'+producto.id;
            aProducto.textContent ='Link Producto';
            div.append(aProducto);
            const boton = document.createElement('button');
            boton.classList.add('btn', 'btn-primary', 'btn__producto')
            boton.textContent = "Añadir al carrito";
            boton.addEventListener('click', function() {
                carrito.push(producto.id);
                actualizarCarrito();
            });
            divBoton.append(boton);
            idProdoductosMostrados++;
            productosMostrados.push(producto.id);
        }

    })
    let verMas = document.createElement('button');
    verMas.textContent = 'Ver mas';
    verMas.addEventListener('click', function() {
        mostrarMasProductos();
    });
    verMas.classList.add('btnVerMas');
    section.append(verMas);
};

async function actualizarCarrito() {
    let response = await fetch('api/products', { method: 'GET' });
    let products = await response.json();

    products.forEach((producto) => {
        for (let id of carrito) {
            if (producto.id === id) {
                anyadirCarrito(producto);
                break;
            }
        }
    })
};
async function anyadirCarrito(producto) {
    let envio = {amount: producto.amount};
    let response = await fetch('api/cart', {
        method: 'POST',
        body: JSON.stringify(envio),
    });
    let respuesta = await response.json();
    const carro = document.querySelector('#carro');
    productosCarrito++;
    carro.textContent = productosCarrito;
}
</script>
