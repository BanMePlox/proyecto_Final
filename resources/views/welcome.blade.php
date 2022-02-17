@extends('layouts.layout')
@php
    $contador = 0;
@endphp
@section('body')
<main id="masVendidos">
    <article>
        <h2>Los mas vendidos</h2>
        <section class="mas__vendidos">
            @forelse($products as $product)
            @if ($product->disponible == 1 && $contador < 5 && $product->sold > 10)
            <div class="producto">
                <a href="{{Route('products.show', $product->id)}}">
                    <img class="imagen__producto" src="{{Storage::url('product/'.$product->file_path)}}" alt="Imagen Productos">
                    <div class="producto__texto">
                        <p class="nom__pro">{{$product->name}}</p>
                        <p>{{$product->price}}€</p>
                    </div>
                </a>
                @php
                $contador++;
            @endphp
            </div>
            @endif
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
<script>
</script>
