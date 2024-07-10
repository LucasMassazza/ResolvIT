
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GestorIncidente</title>
        <link rel="stylesheet" href="css/css.css">
        <link rel="shortcut icon" href="images/" type="image/x-icon">
    </head>
    <body class="bodyLogin">
        <form class="formularioLogin" action="validacion_usr.php" method="post">
            <div>
                <label class="marginItemsForm" for="usuario">Usuario</label>
                <input class="marginItemsForm" type="text" id="usuario" name="usuario">
            </div>
            <div>
                <label class="marginItemsForm" for="clave">Clave</label>
                <input class="marginItemsForm" type="password" id="clave" name="clave">
            </div>
            <div class="botonesLogin">
                <input class="botonLogin" type="submit" value="IniciarSesión">
                <input class="botonLogin" type="button" value="Registrarse" onclick="window.location.href='registro.php';">
            </div>
        </form>
    </body>
</html>