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

  <script>
     /* const formElem = document.querySelector('#formElem');
    formElem.onsubmit = async (e) => {
      e.preventDefault();

      let response = await fetch('api/productos', {
        method: 'POST',
        body: new FormData(formElem)
      });

      let result = await response.json();

    };*/
    let result;
   /* const formElem = document.querySelector('#formElem');
    formElem.onsubmit = async (e) => {
      e.preventDefault();

      let response = await fetch('api/products', {
        method: 'GET'
      });

       result = await response.json();
    };*/



    let listaCarrito = {};

    let pr =document.querySelector('.producto');
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
a.classList.add('btn__producto btn_carrito');
div.append(h3);
div.append(a);
}

document.body.append(div);
}
f();

function agregarProductoCarrito(idProducto,
  unidades,
  precio) {

  this.idProducto = idProducto;
  this.unidades = unidades;
  this.precio = precio;

  listaCarrito = { IdProducto: this.idProducto, unidades: this.unidades, precio: this.precio };

  console.log(listaCarrito);
}

function addClickResetear() {

const btnCarrito = document.querySelector('.btn_carrito');
    btnCarrito.onclick = agregarProductoCarrito;
}
addClickResetear();
      </script>

@extends('layouts.layout')

@section('body')
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

</html>
@endsection
