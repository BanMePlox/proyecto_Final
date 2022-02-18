
<header>
    <nav class="cabecera">
        <a href="{{route('products.index')}}"><img src="{{URL::asset('Imagenes/logoJuanadona.png')}}" alt="Logo" id="logo"></a>
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
                    <button href="#" id="cart" onclick="mostrarCarrito()">
                    <img src="{{URL::asset('Imagenes/carroVacio.png')}}" alt="carrito"></a>
                    <p id="carro"></p>
                    </button>
                </li>
            </ul>
    </nav>
</header>
<hr>

<script>

let productosCarrito = 0;
let idProdoductosMostrados = 0;
let products;
let productosMostrados = [];
let carrito =[];
let cantidad
async function elegirCategoria(id) {
    idProdoductosMostrados = 0;
    let response = await fetch('api/products/' + id);
    products = await response.json();
    //Elimina los productos mostrados
    const eliminarArticle = document.querySelector('article');
    eliminarArticle.remove();
    //Recoge el main
    //Crea un article y lo añane dentro del main.
    let main = document.querySelector('main');
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
            boton.setAttribute('marcador', producto.id);
            boton.addEventListener('click', anyadirCarrito);
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
            boton.setAttribute('marcador', producto);
            boton.addEventListener('click', anyadirCarrito);
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

function anyadirCarrito(evento){
    carrito.push(evento.target.getAttribute('marcador'))
    let btnCarrito = document.querySelector('#carro');
    btnCarrito.textContent= carrito.length;
}

 function mostrarCarrito() {
    const eliminarArticle = document.querySelector('article');
    eliminarArticle.remove();
    let crearArticle = document.createElement('article');
    let main = document.querySelector('main');
    const carritoSinDuplicados = [...new Set(carrito)];
    carritoSinDuplicados.forEach((item) => {
        // Obtenemos el item que necesitamos de la variable base de datos
        const miItem = products.filter((itemBaseDatos) => {
        // ¿Coincide las id? Solo puede existir un caso
        return itemBaseDatos.id === parseInt(item);
    });
    const numeroUnidadesItem = carrito.reduce((total, itemId) => {
    // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
    return itemId === item ? total += 1 : total;
    }, 0);
    main.append(crearArticle);
    //Crea el primer div que es el contenedor.
    let div = document.createElement('div');
    div.classList.add('divCarrito');
    crearArticle.append(div);
    let img = document.createElement('img');
    img.classList.add('imagenCarrito')
    let infoProducto = document.createElement('p');
    infoProducto.classList.add('infoCarrito');
    infoProducto.textContent = `${numeroUnidadesItem} x ${miItem[0].name} - ${miItem[0].price}€`;
    img.src = `../Imagenes/${miItem.name}.webp`;
    const miBoton = document.createElement('button');
    miBoton.classList.add('btnElimiar');
    miBoton.textContent = 'Eliminar';
    miBoton.dataset.item = item;
    miBoton.addEventListener('click', borrarItemCarrito);
    // Añadimos al html
    div.append(miBoton);
    div.append(img);
    div.append(infoProducto);
    });
    const botonVaciar = document.createElement('button');
    botonVaciar.addEventListener('click',vaciarCarrito)
    botonVaciar.classList.add('botonVaciar');
    botonVaciar.textContent='Vaciar Carrito';
    const precioTotal = document.createElement('p');
    precioTotal.classList.add('precioTotal')
    const hr = document.createElement('hr');
    const article = document.querySelector('article');
    hr.classList.add('ContenedorTotal')
    article.append(hr);
    precioTotal.textContent = 'Total: ' + calcularTotal();
    hr.append(precioTotal);
    hr.append(botonVaciar);

 }
    function borrarItemCarrito(evento){
        const id = evento.target.dataset.item;
         // Borramos todos los productos
        carrito = carrito.filter((carritoId) => {
        return carritoId !== id;
        });
              // volvemos a renderizar
              mostrarCarrito();
    }
          function calcularTotal() {
              // Recorremos el array del carrito
              return carrito.reduce((total, item) => {
                  // De cada elemento obtenemos su precio
                  const miItem = products.filter((itemBaseDatos) => {
                      return itemBaseDatos.id === parseInt(item);
                  });
                  // Los sumamos al total
                  return total + miItem[0].price;
              }, 0).toFixed(2);
          }
          function vaciarCarrito() {
              // Limpiamos los productos guardados
              carrito = [];
              // Renderizamos los cambios
              mostrarCarrito();
          }

    </script>
