@extends('layouts.layout')

@section('body')
<main>
    <article>
        <h2>Los mas vendidos</h2>
        <section class="mas__vendidos">
            @forelse($products as $product)
            <div class="producto">
<<<<<<< HEAD
                <img src="{{Storage::url('product/'.$product->file_path)}}" alt="Imagen productos">
                <div class="producto__texto">
                    <h3>{{$product->name}}</h3>
                    <p>{{$product->price}}€</p>
                    <a class="btn__producto" id="btn_carrito"href="#" click="agregarProductoCarrito({{$product->id}})">Añadir al carrito</a>
=======
                <a href="{{Route('products.show', $product->id)}}">
                    <img class="imagen__producto" src="{{Storage::url('product/'.$product->file_path)}}" alt="Imagen Productos">
                    <div class="producto__texto">
                        <p>{{$product->name}}</p>
                        <p>{{$product->price}}€</p>
                    </div>
                </a>
                <div class="boton">
                    <a class="btn__producto" href="#">Añadir al carrito</a>
>>>>>>> 50a1f68ebe211a8ec99d791881673eb7265c3bf1
                </div>
            </div>
            @empty
            No hay productos
            @endforelse
            <br>
{{-- Aqui terminan los mas vendidos --}}
            </div>
        </section>
    </article>
</main>
<hr>
@endsection
