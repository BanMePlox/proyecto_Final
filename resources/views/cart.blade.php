@extends('layouts.layout')

@section('body')
@forelse ($carts as $cart)
    @forelse ($ships as $envio)
        @if ($cart->id_ship = $envio->id)
        <p>ID Producto:{{$cart->product_id}}</p>
        <p>Precio: {{$cart->total_price}}</p>
        <hr>
        @endif
    @empty

    @endforelse
@empty
Carrito vacio
@endforelse


@endsection
