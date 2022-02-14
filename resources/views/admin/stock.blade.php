@extends('layouts.layout')

@section('body')
<main>
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
</article>


</main>
@endsection
