<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body>
<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

<div>

<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="file" required>
        </div>
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" required>
    </div>

    <div class="form-group">
        <select name="category_id" id="category_id" default="0">AAA</select>
        @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
        @endforeach

        <input type="number" name="category_id" required>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input type="number" class="form-control" name="price" required>
    </div>

    <div class="form-group">
        <label>Impuestos</label>
        <input type="number" class="form-control" name="impuesto" required>
    </div>

    <div class="form-group">
        <label>% de descuento</label>
        <input type="number" class="form-control" name="descuento" required>
    </div>

    <div class="form-group">
        <label>Stock</label>
        <input type="number" class="form-control" name="stock" required>
    </div>
    <button type="submit">Submit</button>
</form>

</div>
</body>
</html>
