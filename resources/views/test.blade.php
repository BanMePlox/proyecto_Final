<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fetch</title>
</head>
<body>
{{--<form id="formElem">
    <input type="text" name="name">
    <input type="submit">
  </form>--}}


  @section('body')

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



<main>
    <article>
        <h2>Los mas vendidos</h2>
        <section class="mas__vendidos">
            <div class="producto">


            </div>

{{-- Aqui terminan los mas vendidos --}}

        </section>
    </article>
</main>
</body>
<script>
    let carrito = [];
    let result;
async function estructura() {
  let response = await fetch('api/products', {
  method: 'GET'
});
json = await response.json();
// Estructura
const div2 = document.querySelector('.producto');
json.forEach((producto)=>{
    let div= document.createElement('div');
    div.classList.add('producto__texto');
    let h3= document.createElement('h3');
h3.textContent = producto.name;
const boton = document.createElement('button');
boton.classList.add('btn', 'btn-primary','btn__producto');
boton.textContent="Añadir al carrito";
boton.addEventListener('click',function(){carrito.push(producto.id); actualizarCarrito();});
div2.append(div);
div.append(h3);
div.append(boton);
})


//Boton



}



estructura();





/**
* Evento para añadir un producto al carrito de la compra
*/
async function anyadirProductoAlCarrito() {
console.log(index.name);
}



/**
* Dibuja todos los productos guardados en el carrito
*/
/*function renderizarCarrito() {
// Vaciamos todo el html
DOMcarrito.textContent = '';
// Quitamos los duplicados
const carritoSinDuplicados = [...new Set(carrito)];
// Generamos los Nodos a partir de carrito
carritoSinDuplicados.forEach((item) => {
  // Obtenemos el item que necesitamos de la variable base de datos
  const miItem = baseDeDatos.filter((itemBaseDatos) => {
      // ¿Coincide las id? Solo puede existir un caso
      return itemBaseDatos.id === parseInt(item);
  });
  // Cuenta el número de veces que se repite el producto
  const numeroUnidadesItem = carrito.reduce((total, itemId) => {
      // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
      return itemId === item ? total += 1 : total;
  }, 0);
  // Creamos el nodo del item del carrito
  const miNodo = document.createElement('li');
  miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
  miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ${miItem[0].precio}${divisa}`;
  // Boton de borrar
  const miBoton = document.createElement('button');
  miBoton.classList.add('btn', 'btn-danger', 'mx-5');
  miBoton.textContent = 'X';
  miBoton.style.marginLeft = '1rem';
  miBoton.dataset.item = item;
  miBoton.addEventListener('click', borrarItemCarrito);
  // Mezclamos nodos
  miNodo.appendChild(miBoton);
  DOMcarrito.appendChild(miNodo);
});
// Renderizamos el precio total en el HTML
DOMtotal.textContent = calcularTotal();
}

/**
* Evento para borrar un elemento del carrito
*/
/*function borrarItemCarrito(evento) {
// Obtenemos el producto ID que hay en el boton pulsado
const id = evento.target.dataset.item;
// Borramos todos los productos
carrito = carrito.filter((carritoId) => {
  return carritoId !== id;
});
// volvemos a renderizar
renderizarCarrito();
}

/**
* Calcula el precio total teniendo en cuenta los productos repetidos
*/
/*function calcularTotal() {
// Recorremos el array del carrito
return carrito.reduce((total, item) => {
  // De cada elemento obtenemos su precio
  const miItem = baseDeDatos.filter((itemBaseDatos) => {
      return itemBaseDatos.id === parseInt(item);
  });
  // Los sumamos al total
  return total + miItem[0].precio;
}, 0).toFixed(2);
}

/**
* Varia el carrito y vuelve a dibujarlo
*/
/*function vaciarCarrito() {
// Limpiamos los productos guardados
carrito = [];
// Renderizamos los cambios
renderizarCarrito();
}

// Eventos
DOMbotonVaciar.addEventListener('click', vaciarCarrito);

// Inicio
renderizarProductos();
renderizarCarrito();

/* const formElem = document.querySelector('#formElem');
formElem.onsubmit = async (e) => {
e.preventDefault();

let response = await fetch('api/productos', {
  method: 'POST',
  body: new FormData(formElem)
});

let result = await response.json();

};*/
/* let result;
/* const formElem = document.querySelector('#formElem');
formElem.onsubmit = async (e) => {
e.preventDefault();

let response = await fetch('api/products', {
  method: 'GET'
});

 result = await response.json();
};*/



/* let listaCarrito = {};

    async function f() {
      let response = await fetch('api/products', {
  method: 'GET'
});

let result = await response.json();

        let div = document.createElement('div');
div.classList.add('producto__texto');

for(let i=0; i<result.length; i++){
let h3= document.createElement('h3');
h3.textContent = result[i].name;
let a= document.createElement('button');
a.textContent="Añadir al carrito";
a.classList.add('btn__producto');
a.addEventListener('click', anyadirProductoAlCarrito);
div.append(h3);
div.append(a);
}

document.body.append(div);
}
f();

/*function agregarProductoCarrito(name) {



listaCarrito = {name:name};
let btn_carrito = document.querySelector('#cart');
btn_carrito.textContent = listaCarrito.length;

}

function addClickResetear() {

const btnCarrito = document.querySelector('.btn_carrito');
btnCarrito.onclick = agregarProductoCarrito;
}
addClickResetear();*/
/*function anyadirProductoAlCarrito(evento) {
          // Anyadimos el Nodo a nuestro carrito
          carrito.push(evento.target.getAttribute('marcador'))
          // Actualizamos el carrito
          renderizarCarrito();
          // Actualizamos el LocalStorage
          guardarCarritoEnLocalStorage();
      }

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

</html>
@endsection
