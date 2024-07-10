<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body class="bodyRegistro">
    <h1>Gestor Incidentes</h1>
    <h3>Resgistro</h3>
    <form action="proceso_registro.php" method="post">
            <div>
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div>
                <label for="clave">Clave</label>
                <input type="password" id="clave" name="clave" required>
            </div>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div>
                <label for="mail">Mail</label>
                <input type="email" id="mail" name="mail" required>
            </div>
        <input class="botonRegistrarse fontNormal" type="submit" value="Registrar">
    </form>
</body>
</html>