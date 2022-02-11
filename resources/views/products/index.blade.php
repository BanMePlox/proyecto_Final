    <h1>Listado de productos</h1>
    @forelse ($products as $product)
        <a href="{{route('products.show', $product->id)}}">{{$product->name}}</a>
        <br>
        Descripción del producto:
        {{$product->description}}
        <br>
        Imagen del producto:
        <img src="{{ asset('storage/products/' . $product->file_path)}}">
         <br><br>
    @empty
        No hay productos.
    @endforelse

