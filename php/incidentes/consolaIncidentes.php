<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Consola de Incidentes</title>
    <link rel="stylesheet" href="/css/css.css">
    <link rel="shortcut icon" href="/images/servicio-al-cliente.png" type="image/x-icon">
    <script src="/js/confirmacionEliminarInc.js"></script>
</head>
<body class="ocuparResto">
    <?php require '../elementos/header.php'?>
    <main class="mainConsolaIncidentes">
        <div class="tituloCrearIncidente">
            <article>
                <img src="../../images/usuario.png" alt="Logo Incidente">
                <h1>Consola Incidentes</h1>
            </article>
        </div>
        <h3 class="fontGrande">Incidentes Realizados</h3>
        <div class="flex">
            <?php require 'tablaIncidentesUsuario.php';?>
        </div>
    </main>
</body>
</html>