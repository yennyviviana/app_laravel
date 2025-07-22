@csrf
<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $empleado->nombre ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Correo</label>
    <input type="email" name="correo" class="form-control" value="{{ old('correo', $empleado->correo ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Teléfono</label>
    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $empleado->telefono ?? '') }}">
</div>

<div class="mb-3">
    <label>Cargo</label>
    <input type="text" name="cargo" class="form-control" value="{{ old('cargo', $empleado->cargo ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Salario</label>
    <input type="number" step="0.01" name="salario" class="form-control" value="{{ old('salario', $empleado->salario ?? '') }}" required>
</div>

<button class="btn btn-success">Guardar</button>
