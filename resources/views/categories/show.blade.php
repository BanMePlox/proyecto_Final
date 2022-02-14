@extends('layouts.layout')

@section('body')
@forelse ($products as $product)
    @if ($product->category_id == {{$request->id}})
    a
    @endif
@empty
No hay categorías
@endforelse
@endsection
{{-- ESTO ESTÁ MAL TENGO QUE ARREGLARLO AUN --}}
