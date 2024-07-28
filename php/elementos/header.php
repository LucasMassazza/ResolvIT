<?php 
session_start();
error_reporting(0);
?>
<header class="header colorFondoHeader">
    <div class="headerDiv maxWidth">
        <div class="titulo">
            <a href="/php/principal.php"><img class="imagenHeader" src="../../images/apoyo-tecnico.png" alt="Logo"></a>
            <h3>Gestion de Incidentes y Solicitudes</h3>
            <span class="border"></span>
        </div>
        <nav class="headerNav">
            <?php include 'nav.php'?>
        </nav>
        <div class="nombre">
            <span class="border"></span>
            <div>
                <?php 
                    include 'obtencionNombre.php'; 
                    include 'obtencionTipoUsuario.php';
                ?>
            </div>
            <a href="/php/usuario/cerrarSesion.php"><img class="imagenLogout" src="../../images/boton-salir-a-la-aplicacion.png" alt="Cerrar Sesion"></a>
        </div>
    </div>
</header>