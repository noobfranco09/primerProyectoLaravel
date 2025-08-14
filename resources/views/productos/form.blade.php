@csrf
<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $producto->nombre ?? '') }}">
</div>
<div class="mb-3">
    <label>Descripción</label>
    <textarea  name="descripcion" class="form-control" value="{{ old('descripcion', $producto->descripcion ?? '') }}"></textarea>

</div>
<div class="mb-3">
    <label>Precio</label>
    <input type="number" name="precio" class="form-control" value="{{ old('precio', $producto->precio ?? '') }}">
</div>
<div class="mb-3">
    <label>Stock</label>
    <input type="number" name="stock" class="form-control" value="{{ old('stock', $producto->stock ?? '') }}">
</div>
<div class="mb-3">
    <label>Marca</label>
    <input type="text" name="marca" class="form-control" value="{{ old('marca', $producto->marca ?? '') }}">
</div>