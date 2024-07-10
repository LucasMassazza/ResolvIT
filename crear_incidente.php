<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion Incidente</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body class="bodyCrearIncidente">
    <header class="headerHorizontal">
        <div>
            <h2>Gestor Incidencias</h2>
            <?php
                include 'obtencion_nombre.php';
            ?>
        </div>
        <nav class="nav-links">
            <?php
                include 'header.php';
            ?>
        </nav>
    </header>
    <main>
        <h1>Creacion Incidente</h1>
        <form action="proceso_crearincidente.php" method="POST">
            <label class="fontMediana" for="resumen">Resumen</label>
            <input class="inputResumen fontNormal bordeRedondeado" type="text" name="resumen" id="resumen" maxlength="42">
            <label class="fontMediana" for="descripcion">Descripción</label>
            <p class="fontAclaratoria fontChica">Maximo 600 Caracteres</p>
            <textarea class="fontNormal bordeRedondeado" id="descripcion" name="descripcion" rows="4" maxlength="600" required></textarea>
            <input class="botonLogin fontNormal marginBottom20px" type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>