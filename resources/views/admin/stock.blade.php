<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" href="{{URL::asset('css/styleAdmin.css')}}">

</head>
<body>

    <header class="cabecera">
        <a href="{{route('products.index')}}"><img src="{{URL::asset('Imagenes/logoJuanadona.png')}}" alt="Logo" id="logo"></a>
        <a href="{{route('indexadmin')}}">Admin menu</a>
    </header>
    <main class="cuerpo">



        <h2>Bienvenido</h2>
        <p>En esta sección podra llevar a cabo las tareas de control de datos</p>
        <button class="boton__index-admin" onclick="mostrarOcultar1()">Mostrar mas vendidos</button>
        <button class="boton__index-admin" onclick="mostrarOcultar2()">Pedidos Usuario</button>
        <button class="boton__index-admin" onclick="mostrarOcultar3()">Stock</button>

        <div class="contenedor">
            <div id="MasVendidos">
                <table class="tabla">
                    @php
                        $contadorventas = 0;
                    @endphp

                        <tr class="cabecera__tabla">
                            <td>FotoProducto</td>
                            <td>NombreProducto</td>
                            <td>Ventas</td>
                            <td>Precio</td>
                            <td>IDproducto</td>
                        </tr>
                    @forelse ($productdesc as $productdescs)
                        <tr class="cabecera__tabla">
                            <td><img src="{{URL::asset('Imagenes/'.$productdescs->file_path)}}" alt="Imagen Productos" class="Imagen__Producto"></td>
                            <td>{{$productdescs->name}}</td>
                            <td>{{$productdescs->sold}}</td>
                            <td>{{$productdescs->price}}</td>
                            <td>{{$productdescs->id}}</td>
                        @php
                            $contadorventas++;
                        @endphp
                    @empty
                    No hay productos
                    @endforelse
                    <!--Se añadiran los usuarios mediante un bucle, estructura tr por usuario,FOTO,NOMBRE,EMAIL,ID,NIF-->

                </table>
            </div>

            <div id="PedidosUsu">
                <table class="tabla">
                    <tr class="cabecera__tabla">
                        <td>Id_Carrito</td>
                        <td>Cliente_ID</td>
                        <td>Fecha pedido</td>
                        <td>Precio Total</td>
                    </tr>
                    @forelse ($cart as $pedidos)
                        <tr>
                            <td>{{$pedidos->id}}</td>
                            <td>{{$pedidos->id_usuario}}</td>
                            <td>{{$pedidos->order_date}}</td>
                            <td>{{$pedidos->total_price}}</td>
                        </tr>
                    @empty

                    @endforelse


                </table>
            </div>


            <div id="Stock">
                <table class="tabla">
                    <tr>
                        <td>Imagen del producto</td>
                        <td>Nombre del producto</td>
                        <td>Cantidad de Stock</td>
                    </tr>
                    @forelse ($products as $product)
                    @if ($product->stock < 10 && $product->mca_borrado == 1)
                    <tr>
                        <td><img class="Imagen__Producto" src="{{URL::asset('Imagenes/'.$product->file_path)}}" alt="Imagen Producto"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->stock}}</td>
                    </tr>
                    @endif
                    @empty
                        No hay productos con stock bajo!
                    @endforelse



                </table>
            </div>



        </div>
    </main>


    <script>
        let y = document.querySelectorAll(".contenedor > div");
        console.log(y);
        for(let i of y){
            i.style.display="none";
        }

        function mostrarOcultar1() {
            let x = document.querySelector("#MasVendidos");
            let y = document.querySelector('#PedidosUsu');
            let z = document.querySelector('#Stock');
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display= "none";
                z.style.display= "none";
            } else {
                x.style.display = "none";
            }
        }

        function mostrarOcultar2() {
            let x = document.querySelector("#PedidosUsu");
            let z = document.querySelector('#Stock');
            let y = document.querySelector("#MasVendidos");
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display= "none";
                z.style.display= "none";
            } else {
                x.style.display = "none";
            }
        }
        function mostrarOcultar3() {
            let x = document.querySelector("#Stock");
            let z = document.querySelector("#MasVendidos");
            let y = document.querySelector('#PedidosUsu');
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display= "none";
                z.style.display= "none";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</body>
</html>



