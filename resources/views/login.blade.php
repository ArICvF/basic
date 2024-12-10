<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleLogin.css') }}">
    <title>Aprendible</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,300&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    <div id="login-general">
        <h1 id="Titulo">INGRESAR</h1>
        <form method="POST">
                @csrf
                <p>Correo electronico</p>
                <label for="">
                    <input id="email" name="email" placeholder="Correo electronico" > 
                </label>
                
                 <p>Contraseña</p>
                <label for="">
                    <input id="Psw" type="password" name="password" placeholder="Contraseña">
                </label>   
                <br>
                <a id="link" href="">¿Olvidaste tu contraseña?</a>
                <br>
                <button id="boton" type="submit">Iniciar sesion</button>

            </form>
    </div>
    

</body>
</html>