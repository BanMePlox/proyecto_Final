@extends('layouts.layout')

@section('body')
<main>

    <button onclick="">STOCK</button>
    <button onclick="">STOCK</button>
    <button onclick="">STOCK</button>
    <button onclick="">PEDIDOS DE USUARIO</button>

<article>
<h1>STOCK BAJO</h1>
<section class="mas__vendidos">
@forelse ($products as $product)
    @if ($product->stock < '5')
        <div class="producto">
            <a href="{{Route('products.show', $product->id)}}">
                <img class="imagen__producto" src="{{Storage::url('product/'.$product->file_path)}}" alt="Imagen Productos">
                <div class="producto__texto">
                    <p>{{$product->name}}</p>
                    <p>{{$product->price}}€</p>
                </div>
            </a>
        </div>
    </section>
    @endif
@empty
No hay productos sin stock
@endforelse

{{-- FINAL DEL STOCK --}}



{{-- INICIO PRODUCTOS MÁS VENDIDOS ¿POR CATEGORIA? --}}

<div class="form-group">
    Categoria
    <select name="category_id" id="category_id" default="1">
    @foreach ($category as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->name}}</option>
    @endforeach
</select>
</div>

{{-- FINAL PRODUCTOS MÁS VENDIDOS --}}



{{-- INICIO PRODUCTOS MENOS VENDIDOS ¿POR CATEGORIA? --}}

{{-- FINAL PRODUCTOS MENOS VENDIDOS --}}



{{-- INICIO REVISAR PEDIDOS --}}

{{-- FINAL REVISAR PEDIDOS --}}



</article>


</main>
@endsection
