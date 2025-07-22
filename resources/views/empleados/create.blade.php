@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Empleado</h2>
    <form method="POST" action="{{ route('empleados.store') }}">
        @include('empleados.form')
    </form>
</div>
@endsection
