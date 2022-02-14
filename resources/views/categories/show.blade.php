@extends('layouts.layout')
@section('body')
@forelse ($products as $product)
    @if ($request->route)
    a
    @endif
@empty

@endforelse
@endsection
{{-- ESTO ESTÁ MAL TENGO QUE ARREGLARLO AUN --}}
