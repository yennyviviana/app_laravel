@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Mi Perfil</h2>
    <p><strong>Nombre:</strong> {{ Auth::user()->name }}</p>
    <p><strong>Correo:</strong> {{ Auth::user()->email }}</p>
    <p><strong>Rol:</strong> {{ Auth::user()->role ?? 'No definido' }}</p>
</div>
@endsection
