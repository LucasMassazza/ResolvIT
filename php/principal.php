<?php 
    error_reporting(1);
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ResolvIT - Principal</title>
        <link rel="stylesheet" href="../css/css.css">
        <link rel="shortcut icon" href="../images/servicio-al-cliente.png" type="image/x-icon">
    </head>
    <body class="principalBody">
        <?php include 'elementos/header.php'?>
        <main class="mainPrincipal">
            <h2>Carga de Incidentes y Gestion Herramental</h2>
            <div>
               <?php include __DIR__ . '/catalogo/catalogo.php';?>    
            </div>
        </main>
    </body>
</html>