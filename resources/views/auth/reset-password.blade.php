<!DOCTYPE html>
<html>
<head>
    <title>Restablecer contraseña</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <h2>Restablecer contraseña</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        <label>Nueva contraseña:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Confirmar contraseña:</label><br>
        <input type="password" name="password_confirmation" required><br><br>

        <button type="submit">Restablecer</button>
    </form>
</body>
</html>
