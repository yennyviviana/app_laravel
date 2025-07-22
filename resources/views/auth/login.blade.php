<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
    <div class="form-with-image">
        <img src="{{ asset('img/1.jpg') }}" alt="Login Image">
        <div style="flex: 1;">
            <h2>Iniciar Sesión</h2>

            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif

            @if ($errors->any())
                <ul style="color: red;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label>Correo:</label>
                <input type="email" name="email" required>

                <label>Contraseña:</label>
                <input type="password" name="password" required>

                <button type="submit">Iniciar sesión</button>
            </form>

            <p><a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a></p>
            <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
        </div>
    </div>
</div>
</body>
</html>
