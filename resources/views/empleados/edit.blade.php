@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Empleado</h2>
    <form method="POST" action="{{ route('empleados.update', $empleado) }}">
        @method('PUT')
        @include('empleados.form', ['empleado' => $empleado])
    </form>
</div>
@endsection
