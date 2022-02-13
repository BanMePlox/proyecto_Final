@extends('layouts.layout')

@section('body')
<main>
    <article>
        <h2>Los mas vendidos</h2>
        <section class="mas__vendidos">
            @forelse($products as $product)
            <div class="producto">
                <a href="{{Route('products.show', $product->id)}}">
                    <img class="imagen__producto" src="{{Storage::url('product/'.$product->file_path)}}" alt="Imagen Productos">
                    <div class="producto__texto">
                        <p>{{$product->name}}</p>
                        <p>{{$product->price}}€</p>
                    </div>
                </a>
                <div class="boton">
                    <a class="btn__producto" href="#">Añadir al carrito</a>
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
