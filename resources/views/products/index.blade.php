    <h1>Listado de productos</h1>
    @forelse ($products as $product)
        {{$product->name}} <br>
        Descripción del producto:
        {{$product->description}}
         <br><br>
    @empty
        No hay productos.
    @endforelse

