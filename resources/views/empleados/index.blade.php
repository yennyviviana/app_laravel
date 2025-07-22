@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Empleados</h2>
    <a href="{{ route('empleados.create') }}" class="btn btn-primary mb-3">Nuevo Empleado</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Cargo</th><th>Salario</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->correo }}</td>
                <td>{{ $empleado->telefono }}</td>
                <td>{{ $empleado->cargo }}</td>
                <td>${{ $empleado->salario }}</td>
                <td>
                    <a href="{{ route('empleados.edit', $empleado) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
