
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ResolvIT</title>
        <link rel="stylesheet" href="/css/css.css">
        <link rel="shortcut icon" href="images/servicio-al-cliente.png" type="image/x-icon">
    </head>
    <body class="bodyLogin">
        <div class="titulo">
            <img src="/images/soporte-tecnico.png" alt="Logo">
            <div>
                <h1>ResolvIT</h1>
                <p>El Gestor de Incidentes</p>
            </div>
        </div>
        <form class="formularioLogin border" action="php/usuario/validacion_usr.php" method="post">
            <div class="formularioLoginDiv">
                <div>
                    <label class="marginItemsForm" for="usuario">Usuario</label>
                    <input class="marginItemsForm input" type="text" id="usuario" name="usuario">
                </div>
                <div>
                    <label class="marginItemsForm" for="clave">Clave</label>
                    <input class="marginItemsForm input" type="password" id="clave" name="clave">
                </div>
                <div class="botonesLogin">
                    <input class="botonLogin" type="submit" value="Iniciar Sesión">
                </div>
            </div>
        </form>
    </body>
</html>