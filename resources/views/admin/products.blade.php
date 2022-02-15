@extends('layouts.layout')

@section('body')

<form id="formElem_anyadir"  type="POST" enctype="multipart/formdata">
    <input type="text" name="name" value="Nombre del producto">
    <input type="text" name="description" value="Descripcion">
    <input type="file" name="file_path">
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
  </form>
</body>
<script>
    const formElem = document.querySelector('#formElem_anyadir');
        formElem.onsubmit = async(e) => {
            e.preventDefault();

            let response = await fetch('/api/productos', {
                method: 'POST',
                body: new FormData(formElem)
            });

            let result = await response.json();
        };

     </script>
@endsection
