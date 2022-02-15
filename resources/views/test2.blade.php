<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fetch</title>
</head>
<body>


<form id="formElem_anyadir">
    <input type="text" name="name" value="Nombre del producto">
    <input type="text" name="description" value="Descripcion">
    <input type="file" name="file" enctype=multipart/form-data>
    <select name="category_id" id="select_category_id">
        <option value="2">Fruta</option>
        <option value="1">Pescado</option>
    </select>
    <input type="number" class="form-control" name="price" required value="1">
    <input type="number" class="form-control" name="impuesto" required value="1">
    <input type="number" class="form-control" name="descuento" required value="1">
    <input type="number" class="form-control" name="stock" required value="1" >
    <button type="submit" id="boton_anyadir" value="Añadir">Añadir</button>
  </form>
</body>
<script>
    const formElem = document.querySelector('#formElem_anyadir');
        formElem.onsubmit = async(e) => {
            e.preventDefault();

            let response = await fetch('api/productos', {
                method: 'POST',
                body: new FormData(formElem)
            });

            let result = await response.json();
        };
        </script>
</html>
