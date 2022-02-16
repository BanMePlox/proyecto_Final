<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <script src="Adminjs.js" defer></script>
    <link rel="stylesheet" href="{{URL::asset('css/stock.css')}}">

</head>
<body>
    <header class="cabecera">
        <a href="{{route('products.index')}}"><img src="{{URL::asset('Imagenes/logoJuanadona.png')}}" alt="Logo" id="logo"></a>
        <p>Gestion de Stock</p>
    </header>
    <main class="cuerpo">
        <h2>Bienvenido</h2>
        <p>En esta sección podra llevar a cabo las tareas de Stock</p>
        <button onclick="mostrarOcultar1()">Mostrar mas vendidos</button>
        <button onclick="mostrarOcultar2()">Mostrar menos vendidos</button>
        <button onclick="mostrarOcultar3()">Pedidos Usuario</button>
        <button onclick="mostrarOcultar4()">Stock</button>

        <div class="contenedor">
            <div id="MasVendidos">
                <p>
                    @php
                        $contadorventas = 0;
                    @endphp
                    @forelse ($productdesc as $productdescs)

                        <div class="producto__texto">
                            <a href="{{Route('products.show', $productdescs->id)}}">{{$productdescs->name}}
                            </div>
                            @php
                                $contadorventas++;
                            @endphp
                    @empty
                        No hay productos bien vendidos
                    @endforelse

                </p>
            </div>


            <div id="MenosVendidos">
                <p>Prueba de que va menos vendidos</p>
            </div>


            <div id="PedidosUsu">
                <p>PedidosUsu</p>
            </div>


            <div id="Stock">
                @forelse ($products as $product)
                    @if ($product->stock < 15)
                    <a href="{{Route('products.show', $product->id)}}">{{$product->name}} <br>
                    @endif
                @empty

                @endforelse
            </div>

        </div>
    </main>
</body>
</html>


<script>
    let y = document.querySelectorAll(".contenedor > div");
console.log(y);
for(let i of y){
    i.style.display="none";
}

function mostrarOcultar1() {
    let x = document.querySelector("#MasVendidos");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function mostrarOcultar2() {
    let x = document.getElementById("MenosVendidos");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function mostrarOcultar3() {
    let x = document.getElementById("PedidosUsu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function mostrarOcultar4() {
    let x = document.getElementById("Stock");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
