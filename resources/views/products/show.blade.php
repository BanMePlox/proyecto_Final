@extends('layouts.layout')
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
@section('body')

<body class="contenedor__productoGeneral">
    <main>
        <div class="detalles__producto">
            <div>
                <img class="producto__imagen-detalles" src="{{Storage::url('product/'.$product->file_path)}}" alt="Foto producto">
            </div>
            <div class="formulario__producto-detalles">
                <h1>{{$product->name}}</h1>
                <p>{{$product->description}}</p>
                <p class="p__precio">{{$product->price}}€</p>
            </div>
        </div>

    </main>
    </body>

@endsection



