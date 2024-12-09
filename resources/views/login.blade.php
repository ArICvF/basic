<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Aprendible</title>
</head>
<body>

    @include('partials.nav')
    <h1>Login Dashboard</h1>
    <form method="POST">
        @csrf
        <label for="">
            <input type="email" name="email" placeholder="Correo electronico">    
        </label>
        <br>
        <label for="">
            <input type="password" name="password" placeholder="Contraseña">
        </label>
        <br>
        <button type="submit">Iniciar sesion</button>

    </form>

</body>
</html>