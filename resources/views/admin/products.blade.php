@extends('layouts.layout')

@section('body')
@csrf
<form id="formElem_anyadir">
    <input type="text" name="name" value="Nombre del producto">
    <input type="text" name="description" value="Descripcion">
    {{--<input type="file" name="file" enctype=multipart/form-data method="POST">--}}
    <select name="category_id" id="select_category_id">
        <option value="2">Fruta</option>
        <option value="1">Pescado</option>
    </select>
    <input type="number" class="form-control" name="price" required value="1">
    <input type="number" class="form-control" name="impuesto" required value="1">
    <input type="number" class="form-control" name="descuento" required value="1">
    <input type="number" class="form-control" name="stock" required value="1" >
    <button type="submit" id="boton_anyadir" value="Añadir">Añadir</button>
  </form>
@endsection
