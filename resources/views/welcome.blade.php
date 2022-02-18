@extends('layouts.layout')
@php
    $contador = 0;
    $contador2 = 0;
    $contador3 = 0;
    $contador4 = 0;
@endphp
@section('body')
<main id="masVendidos">
    <article>
        <h1 class="h1welcome">Los mas vendidos</h1>
        <section class="mas__vendidos">
            @forelse($products as $product)
            @if ($product->disponible == 1 && $contador < 5 && $product->sold > 10)
            <div class="producto">
                <a href="{{Route('products.show', $product->id)}}">
                    <img src="{{URL::asset('Imagenes/'.$product->file_path)}}" alt="lupa" class="imagen__producto">
                    <div class="producto__texto">
                        <p class="nom__pro">{{$product->name}}</p>
                        <p>{{$product->price}}€</p>
                    </div>
                </a>
                <div class="boton">
                    <a class="btn__producto" href="#">Añadir al carrito</a>
                </div>
                @php
                $contador++;
                @endphp
            </div>
            @endif


            @empty
            No hay productos

            @endforelse
        </section>
            <hr>
            <br>
{{-- Aqui terminan los mas vendidos --}}
            <h1 class="h1welcome">Pescados con poco stock</h1>
        <section class="mas__vendidos">
            @forelse($products as $product)
                @if ($product->category_id == 1 && $contador2 < 5 && $product->stock < 15 && $product->disponible == 1)
                    <div class="producto">
                        <a href="{{Route('products.show', $product->id)}}">
                            <img src="{{URL::asset('Imagenes/'.$product->file_path)}}" alt="lupa" class="imagen__producto">
                            <div class="producto__texto">
                                <p class="nom__pro">{{$product->name}}</p>
                                <p>{{$product->price}}€</p>
                            </div>
                        </a>
                        @php
                        $contador2++;
                        @endphp
                    </div>
                @endif
            @empty
                No hay productos de {{$product->category_id}}
            @endforelse
        </section>
        <hr>
        <br>
        {{-- FINAL PESCADOS CON POCO STOCK --}}

        <h1 class="h1welcome">Novedades</h1>
        <section class="mas__vendidos">
            @forelse($products->reverse() as $product)
                @if ($contador3 < 5 && $product->disponible == 1)
                    <div class="producto">
                        <a href="{{Route('products.show', $product->id)}}">
                            <img src="{{URL::asset('Imagenes/'.$product->file_path)}}" alt="lupa" class="imagen__producto">
                            <div class="producto__texto">
                                <p class="nom__pro">{{$product->name}}</p>
                                <p>{{$product->price}}€</p>
                            </div>
                        </a>
                        @php
                        $contador3++;
                        @endphp
                    </div>
                @endif
            @empty
                No hay productos de {{$product->category_id}}
            @endforelse
        </section>
        <br>
        {{-- FINAL NOVEDADES--}}
    </article>
</main>
<hr>
@endsection
<script>
</script>
