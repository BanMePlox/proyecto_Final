<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="{{URL::asset('css/styleAdmin.css')}}">
</head>
<body>
    <header class="cabecera">
        <a href="{{route('products.index')}}"><img src="{{URL::asset('Imagenes/logoJuanadona.png')}}" alt="Logo" id="logo"></a>
        <a href="{{route('indexadmin')}}">Admin menu</a>
    </header>

<<<<<<< HEAD
<form id="BotonesPrincipales"  type="POST" enctype="multipart/formdata" style="display:" class="">
    <button type="submit" id="boton_anyadir" value="Añadir" onclick="anyadirProductos(event)">Añadir productos</button>
    <button type="submit" id="boton_anyadir" value="Añadir" onclick="modificarProductos(event)">Modificar un producto</button>
    <button type="submit" id="boton_anyadir" value="Añadir" onclick="eliminarProductos(event)">Eliminar un producto</button>
=======
<form id="BotonesPrincipales"  type="POST" enctype="multipart/formdata" style="display:">
    <button type="submit" id="boton_anyadir" class="boton__index-admin"value="Añadir" onclick="anyadirProductos(event)">Añadir productos</button>
    <button type="submit" id="boton_anyadir" class="boton__index-admin"value="Añadir" onclick="modificarProductos()">Modificar un producto</button>
    <button type="submit" id="boton_anyadir" class="boton__index-admin"value="Añadir" onclick="eliminarProductos()">Eliminar un producto</button>
>>>>>>> 34685455a91587f6ef048bb1caca8fa693bca30c

</form>

<article>
    <table class="tabla">
        <h1>LISTA DE PRODUCTOS</h1>
        <div id="buscador">
            <form action="" id="busqueda">
            <img src="{{URL::asset('Imagenes/lupa.png')}}" alt="lupa">
            <input type="text" placeholder="Busca tus productos">
            </form>
        </div>
        <tr class="cabecera__tabla">
            <td>ID Producto</td>
            <td>Nombre Producto</td>
            <td>Stock</td>
            <td>Categoria</td>
            <td>Precio</td>
            <td>Disponibilidad</td>
        </tr>
        @forelse ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->stock}}</td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->price}}€</td>
            <td>
                @if($product->disponible == 0)
                    No disponible
                @else
                    Disponible
                @endif
            </td>
        </tr>
        @empty
            No hay productos
        @endforelse
    </table>
</article>
</main>


{{---Formulario para añadir productos---}}
@csrf
@method('POST')
<form id="formElem_anyadir" enctype="multipart/formdata" style="display:none">
    <input type="text" name="name" value="Nombre del producto">
    <input type="text" name="description" value="Descripcion">
    <select name="category_id" id="select_category_id">
        <option value="1">Pescaderia</option>
        <option value="2">Carniceria</option>
        <option value="3">Panaderia</option>
    </select>
    <input type="number" class="form-control" name="price">
    <input type="number" class="form-control" name="impuesto">
    <input type="number" class="form-control" name="descuento">
    <input type="number" class="form-control" name="stock">
    <button type="submit" id="boton_anyadir" value="Añadir">Añadir</button>
    <button type="submit" id="boton_atras1" value="Eliminar" onclick="anyadirProductos(event)">Atras</button>
  </form>

    <form id="formElem_eliminar"  type="POST" style="display:none">
    <input type="text" name="name" value="Nombre del producto" id="name">
    <button type="submit" id="boton_eliminar" value="Eliminar" >Eliminar</button>
    <button type="submit" id="boton_atras1" value="Eliminar" onclick="eliminarProductos()">Atras</button>
  </form>

   <form id="formElem_modificar" style="display:none">
    <input type="text" name="id" value="Id del producto" id="idProducto">
    <button type="submit" id="boton_buscar" value="Buscar">Buscar</button>
    <button type="submit" id="boton_atras1" value="Eliminar" onclick="modificarProductos()">Atras</button>
  </form>

 <form id="formElem_modificando" style="display:none">
 <input type="text" name="name" id="name">
  <input type="text" name="description" id="description">
  <select name="category_id" id="select_category_id">
      <option value="1">Pescaderia</option>
      <option value="2">Carniceria</option>
      <option value="3">Panaderia</option>
  </select>
  <input type="number" class="form-control" name="price" id="price">
  <input type="number" class="form-control" name="impuesto" id="impuesto">
  <input type="number" class="form-control" name="descuento" id="descuento">
  <input type="number" class="form-control" name="stock" id="stock">
  <button type="submit" id="boton_editar" value="Buscar" onclick="guardarDatosEditados()">EDITAR</button>
  <button type="submit" id="boton_atras1" value="Eliminar" onclick="modificarProductos()">Atras</button>
</form>

</body>


<script>
      const formElem = document.querySelector('#formElem_anyadir');
   const formModificar = document.querySelector('#formElem_modificar');
   const formModificando = document.querySelector('#formElem_modificando');
   const formEleminar = document.querySelector('#formElem_eliminar');

    //Hace visible el formulario de añadir productos.
   async function anyadirProductos(event){
       event.preventDefault();
        const botonesPrincipales = document.querySelector('#BotonesPrincipales');
            if (botonesPrincipales.style.display=="none") {
                botonesPrincipales.style.display = "";
                formElem.style.display="none";
            } else {
                botonesPrincipales.style.display = "none";
                formElem.style.display="";
            }

    }
    async function modificarProductos(event){
        event.preventDefault();
        const botonesPrincipales = document.querySelector('#BotonesPrincipales');
            if (botonesPrincipales.style.display=="none") {
                botonesPrincipales.style.display = "";
                formModificar.style.display="none";
            } else {
                botonesPrincipales.style.display = "none";
                formModificar.style.display="";
            }

    }
    async function eliminarProductos(event){
        event.preventDefault();
        const botonesPrincipales = document.querySelector('#BotonesPrincipales');
            if (botonesPrincipales.style.display=="none") {
                botonesPrincipales.style.display = "";
                formEleminar.style.display="none";
            } else {
                botonesPrincipales.style.display = "none";
                formEleminar.style.display="";
            }

    }

    //Funcion que modifica los productos
     formModificar.onsubmit = async(e) => {
            const id =document.querySelector('#idProducto');
            let idProducto = id.value;
            e.preventDefault();
            let response = await fetch('/api/products', { method: 'GET' });
            let products = await response.json();
             products.forEach((producto)=>{
                       if(producto.id == idProducto) {
                           mostrarProductoParaModificar(producto);
                        }
             })
        };
    async function mostrarProductoParaModificar(producto) {
        const name =document.querySelector('#name');
        const description =document.querySelector('#description');
        const price =document.querySelector('#price');
        const impuesto = document.querySelector('#impuesto');
        const stock = document.querySelector('#stock');
        name.value =producto.name;
        description.value = producto.description;
        price.value = producto.price;
        impuesto.value = producto.impuesto;
        stock.value= producto.stock;
        formModificando.style.display="";
    }
async function guardarDatosEditados(){
    const id =document.querySelector('#idProducto');
    let response = await fetch('/api/productos', {
                method: 'PUT',
                body: new FormData(formModificando)
            });

}

    //Funcion que elimina los productos a la base de datos.

    formElem.onsubmit = async(e) => {
            e.preventDefault();
            let response = await fetch('/api/productos', {
                method: 'POST',
                body: new FormData(formElem)
            });

            let result = await response.json();
        };
    //Funcion que añade un producto de la base de datos.
    formElem.onsubmit = async(e) => {
            e.preventDefault();
            let response = await fetch('/api/productos', {
                method: 'POST',
                body: new FormData(formElem)
            });

            let result = await response.json();
        };
     </script>

