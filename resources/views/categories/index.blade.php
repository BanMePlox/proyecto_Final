@extends('layouts.layout')
@section('body')
<h1>Listado de categorias</h1>
@forelse ($categories as $category)
    <a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a>
    <br><br>
@empty
    No hay categorias.
@endforelse
@endsection
