<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleRegisterEmpresa.css') }}">
    <title>Aprendible</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,300&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.nav')
    <div id="login-general">
    <h1>Crear cuenta</h1>
    <form class="form-container">
        <div class="form-group">
            <label for="firstName">Sector de la empresa</label>
            <input type="text" id="sector" name="firstName" placeholder="Ejemplo: Servicios de la información">
        </div>
        <div class="form-group">
            <label for="lastName">Sitio web</label>
            <input type="text" id="sitio-web" name="lastName" placeholder="URL de la página">
        </div>
        <div class="form-group">
            <label for="email">Tamaño de la empresa</label>
            <select id="opciones" name="opciones">
                <option value="opcion1">Opción 1</option>
                <option value="opcion2">Opción 2</option>
                <option value="opcion3">Opción 3</option>
              </select>
        </div>
        <div class="form-group">
            <label for="phone">Tipo de empresa</label>
            <input type="tel" id="tipo-empresa" name="phone" placeholder="Confirmar contraseña">
        </div>
        
        <div class="form-group">
            <label class="nombre" for="exampleFormControlFile1">Logotipo de la empresa</label>
            <label class="custom-file-upload">
                <img src="../Img/descargas.png" alt="Icono"> Seleccionar archivo
                <input type="file">
              </label>
        </div>

        <div class="form-group">
            <label class="nombre" for="exampleFormControlFile1">RFC</label>
            <label class="custom-file-upload">
                <img src="../Img/descargas.png" alt="Icono"> Seleccionar archivo
                <input type="file">
              </label>
        </div>

        <div class="form-group">
            <label class="nombre" for="exampleFormControlFile1">Identidicación</label>
            <label class="custom-file-upload">
                <img src="../Img/descargas.png" alt="Icono"> Seleccionar archivo
                <input type="file">
              </label>
        </div>

        <div class="form-group">
            <label class="nombre" for="exampleFormControlFile1">Carta de presentación</label>
            <label class="custom-file-upload">
                <img src="../Img/descargas.png" alt="Icono"> Seleccionar archivo
                <input type="file">
              </label>
        </div>



        <div class="form-actions">
            <button type="submit">Continuar</button>
        </div>
    </form>
    </div>

</body>
</html>