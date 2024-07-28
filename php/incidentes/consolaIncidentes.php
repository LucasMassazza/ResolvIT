<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Consola de Incidentes</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="shortcut icon" href="../../images/servicio-al-cliente.png" type="image/x-icon">
</head>
<body class="ocuparResto">
    <?php require '../elementos/header.php'?>
    <main class="mainConsolaIncidentes">
        <div>
            <h1>Tabla de Incidentes</h1>
            <?php 
                echo '<p>De </p>';
                include __DIR__.'/../elementos/obtencionNombre.php';
            ?>
        </div>
        <div class="flex">
            <?php require 'tablaIncidentesUsuario.php';?>
        </div>
    </main>
</body>
</html>