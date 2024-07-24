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
                <a href="" class="itemCatalogo border">
                    <img src="../images/incidente.png" alt="Logo Incidente">
                    <div class="itemCatalogoTexto">
                        <p>Consola del Solicitante</p>
                        <p class="fontChica">Crear Incidente</p>
                    </div>
                </a>
                <a href="" class="itemCatalogo border">
                    <img src="../images/ordenador.png" alt="Logo Herramental">
                    <div class="itemCatalogoTexto">
                        <p>Consola Herramental</p>
                        <p class="fontChica">Solicitar Herramental</p>
                    </div>
                </a>
                <a href="" class="itemCatalogo border">
                    <img src="../images/usuario.png" alt="Logo Mis Incidentes">
                    <div class="itemCatalogoTexto">
                        <p>Consola de Incidentes</p>
                        <p class="fontChica">Mis Incidentes</p>
                    </div>
                </a>
            </div>
        </main>
    </body>
</html>