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
                    <a class="btn__producto" id="btn_carrito"href="#" click="agregarProductoCarrito({{$product->id}})">Añadir al carrito</a>
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
