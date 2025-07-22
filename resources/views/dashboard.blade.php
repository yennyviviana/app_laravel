@extends('layouts.app')

@section('content')
<style>
    .dashboard-menu {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 40px;
    }

    .card {
        background: #ffffff;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: transform 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card a {
        display: block;
        text-decoration: none;
        color: #0069d9;
        font-weight: bold;
        font-size: 16px;
        margin-top: 10px;
    }

    .logout-btn {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 10px 20px;
        margin-top: 30px;
        cursor: pointer;
        border-radius: 5px;
    }
</style>

<div class="container">
    <h2>Bienvenida, {{ Auth::user()->name }}</h2>
    <p>Selecciona una opción para continuar:</p>

    <div class="dashboard-menu">
        <div class="card">
            <img src="{{ asset('img/1.jpg') }}" alt="CRUD empleados" width="80">
            <a href="{{ route('empleados.index') }}">CRUD de Empleados</a>
        </div>

        <div class="card">
            <img src="{{ asset('img/1.jpg') }}" alt="Perfil" width="80">
         <a href="{{ route('perfil') }}">Mi Perfil</a>

        </div>

        <div class="card">
            <img src="{{ asset('img/1.jpg') }}" alt="Configuraciones" width="80">
           <a href="{{ route('configuracion') }}">Configuración</a>
        </div>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-btn">Cerrar sesión</button>
    </form>
</div>
@endsection
