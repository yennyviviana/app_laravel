<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <h2>Registro de Usuario</h2>

    @if ($errors->any())
        <div>
            <strong>Errores:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}" required><br><br>

        <label>Correo:</label>
        <input type="email" name="email" value="{{ old('email') }}" required><br><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>

        <label>Confirmar contraseña:</label>
        <input type="password" name="password_confirmation" required><br><br>

        <button type="submit">Registrarse</button>
    </form>

    <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
</body>
</html>
