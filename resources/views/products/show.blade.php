@extends('layouts.layout')
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
@section('body')

<img class="imagen__producto" src="{{Storage::url('product/'.$product->file_path)}}" alt="Imagen Productos">
<p class="nom__pro">{{$product->name}}</p>


@endsection
