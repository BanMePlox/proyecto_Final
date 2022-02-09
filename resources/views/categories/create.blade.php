<form action="{{route('categories.store')}}" method="post">
    @csrf
    <h1>Nombre de la categoría</h1>
    <div class="form-group">
        <input type="text" name="name" required>
    </div>
    <input type="submit" value="Guardar">
    </form>


