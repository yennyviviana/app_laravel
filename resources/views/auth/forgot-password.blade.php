<!DOCTYPE html>
<html>
<head>
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <h2>¿Olvidaste tu contraseña?</h2>

    @if (session('status'))
        <p style="color: green;">{{ session('status') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <label>Correo electrónico:</label><br>
        <input type="email" name="email" required><br><br>
        <button type="submit">Enviar enlace de recuperación</button>
    </form>

    <p><a href="{{ route('login') }}">Volver al login</a></p>
</body>
</html>
