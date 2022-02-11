@forelse ($products as $product)
<h1>{{$product->name}}</h1>
<div>
    <a href="{{route('products.show', $product->id)}}">{{$product->name}}</a>
     <br><br>
</div>
@empty

@endforelse

{{-- ESTO ESTÁ MAL TENGO QUE ARREGLARLO AUN --}}
