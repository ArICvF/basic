<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleRegister.css') }}">
    <title>Aprendible</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,300&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    <div id="login-general">
    <h1>Crear usuario</h1>
    <form class="form-container">
        <div class="form-group">
            <label for="firstName">Nombre completo o de usuario</label>
            <input type="text" id="firstName" name="firstName" placeholder="Ingresa tu nombre de usuario">
        </div>
        <div class="form-group">
            <label for="lastName">Correo electrónico</label>
            <input type="text" id="lastName" name="lastName" placeholder="Ingresa tu correo electrónico">
        </div>
        <div class="form-group">
            <label for="email">Contraseña</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu contraseña">
        </div>
        <div class="form-group">
            <label for="phone">Confirmar contraseña</label>
            <input type="tel" id="phone" name="phone" placeholder="Confirmar contraseña">
        </div>
        
        <div class="form-actions">
            <button type="submit">Continuar</button>
        </div>
    </form>
    </div>

</body>
</html>