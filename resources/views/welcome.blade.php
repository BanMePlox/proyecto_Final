@extends('layouts.layout')

@section('body')
<main>
    <article>
        <h2>Los mas vendidos</h2>
        <section class="mas__vendidos">
            @forelse($products as $product)
            <div class="producto">
                <img src="{{Storage::url('product/'.$product->file_path)}}" alt="Imagen productos">
                <div class="producto__texto">
                    <h3>{{$product->name}}</h3>
                    <p>{{$product->price}}€</p>
                    <a class="btn__producto" href="#">Añadir al carrito</a>
                </div>
            </div>
            @empty
            aa
            @endforelse
            <br>
{{-- Aqui terminan los mas vendidos --}}

            <div class="producto">
                <img src="img/instagram.png" alt="Imagen Productos">
                <div class="producto__texto">
                    <h3>Nombre producto</h3>
                    <p>Precio</p>
                    <a class="btn__producto" href="#">Añadir al carrito</a>
                </div>
            </div>
            <div class="producto">
                <img src="img/instagram.png" alt="Imagen Productos">
                <div class="producto__texto">
                    <h3>Nombre producto</h3>
                    <p>Precio</p>
                    <a class="btn__producto" href="#">Añadir al carrito</a>
                </div>
            </div>
        </section>
    </article>
</main>
<hr>
@endsection
