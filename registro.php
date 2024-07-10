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
        <div class="grupoFila">
            <div class="grupoAgrupado">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="grupoAgrupado">
                <label for="clave">Clave:</label>
                <input type="password" id="clave" name="clave" required>
            </div>
        </div>

        <div class="grupoFila">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="grupoAgrupado">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
        </div>

        <div class="grupoFila">
            <div class="grupoAgrupado full-width">
                <label for="mail">Correo Electrónico:</label>
                <input type="email" id="mail" name="mail" required>
            </div>
        </div>
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>