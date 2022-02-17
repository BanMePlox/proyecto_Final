
<form action="{{ route('productos.store') }}" id="form" method="POST" enctype="multipart/formdata">
    @csrf
    <input type="text" name="name" value="Nombre del producto">
    <input type="text" name="description" value="Descripcion">
    <select name="category_id" id="select_category_id">
        <option value="1">Pescaderia</option>
        <option value="2">Carniceria</option>
        <option value="3">Panaderia</option>
    </select>
    <input type="file" name="file_path" id="file_path">
    <input type="number" class="form-control" name="price">
    <input type="number" class="form-control" name="impuesto">
    <input type="number" class="form-control" name="descuento">
    <input type="number" class="form-control" name="stock">
    <button id="boton_anyadir" onclick="sube(event)" value="Añadir">Añadir</button>
  </form>

<script>
async function subir(){
    let form = document.querySelector('#form');

    let response = await fetch('/api/productos', {
        method: 'POST',
        body: new FormData(form)
    });
    console.log(response);
    let result = await response.json();
    console.log(result);
}

function sube(event) {
    event.preventDefault();
    subir();
}
</script>
