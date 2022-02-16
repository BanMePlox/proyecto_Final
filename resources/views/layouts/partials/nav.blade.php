
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
                    @endif
                    @if (Auth::user()->admin == 0)
                        <li><a href="{{route('profile')}}">Gestión de usuario</a></li>
                    @endif


                @endif

                <li>
                    <button href="#" id="cart">
                    <img src="{{URL::asset('Imagenes/carroVacio.png')}}" alt="carrito">
                    <p id="carro"></p>
                    </button>
                </li>
            </ul>
    </nav>
</header>
<hr>
<script>
    let carrito = [];
    let productosCarrito=0;
    let idProdoductosMostrados=0;
    let products;

   async function elegirCategoria(id) {
     let response = await fetch('api/products/' + id);
     products = await response.json();
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
    //Recorre el bucle de productos.
    products.forEach((producto) => {
        if(idProdoductosMostrados<=producto.id && producto.id<=3){
             //Crea el primer div que es el contenedor.
             let divExterior = document.createElement('div');
             divExterior.classList.add('producto');
             section.append(divExterior);
            //Crea el div donde van el titulo, la imagen, el precio.
            let div = document.createElement('div');
            div.classList.add('producto__texto');
            let a = document.createElement('a');
            let p = document.createElement('p');
            p.textContent = producto.name;
            divExterior.append(a);
            a.append(div);
            div.append(p);
            let divBoton= document.createElement('div');
            divBoton.classList.add('boton');
            divExterior.append(divBoton);
            const boton = document.createElement('button');
            boton.classList.add('btn', 'btn-primary', 'btn__producto');
            boton.textContent = "Añadir al carrito";
            boton.addEventListener('click', function() {
                carrito.push(producto.id);
                actualizarCarrito();
            });
            divBoton.append(boton);
            idProdoductosMostrados++;
        }
    })

    const verMas = document.createElement('button');
    verMas.textContent ='Ver mas';
    verMas.classList.add('btnVerMas');
    verMas.addEventListener('click', function() {
                mostrarMasProductos();
            });
    section.append(verMas);

};

async function mostrarMasProductos() {
    let sumaMostrados=idProdoductosMostrados +3;
    const section = document.querySelector('section');
    const verMasAntiguo = document.querySelector('.btnVerMas');
    verMasAntiguo.remove();
    products.forEach((producto) => {
        if(idProdoductosMostrados < producto.id  && producto.id< sumaMostrados) {
        //Crea el primer div que es el contenedor.
    let divExterior = document.createElement('div');
    divExterior.classList.add('producto');
    section.append(divExterior);
        //Crea el div donde van el titulo, la imagen, el precio.
        let div = document.createElement('div');
        div.classList.add('producto__texto');
        let a = document.createElement('a');
        let p = document.createElement('p');
        p.textContent = producto.name;
        divExterior.append(a);
        a.append(div);
        div.append(p);
        let divBoton= document.createElement('div');
        divBoton.classList.add('boton');
        divExterior.append(divBoton);
        const boton = document.createElement('button');
        boton.classList.add('btn', 'btn-primary', 'btn__producto');
        boton.textContent = "Añadir al carrito";
        boton.addEventListener('click', function() {
            carrito.push(producto.id);
            actualizarCarrito();
        });
        divBoton.append(boton);
        idProdoductosMostrados++;
        }
    })
    let verMas= document.createElement('button');
    verMas.textContent ='Ver mas';
    verMas.addEventListener('click', function() {
            mostrarMasProductos();
        });
        verMas.classList.add('btnVerMas');
    section.append(verMas);
};

async function actualizarCarrito() {
    let response = await fetch('api/products', { method: 'GET' });
    let products = await response.json();

    products.forEach((producto)=>{
        for (let id of carrito){
            if(producto.id === id) {
                anyadirCarrito(producto.id);
                break;
            }
        }
    })
};
async function anyadirCarrito(id) {
        let amount = {amount: id};

        console.log(amount);
        let response = await fetch('api/cart', {
        method: 'POST',
        body: JSON.stringify(amount),
      });
      let respuesta = await response.json();
      const carro = document.querySelector('#carro');
      productosCarrito++;
    carro.textContent=productosCarrito;
    }
</script>
