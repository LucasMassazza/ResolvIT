<?php
    error_reporting(1);
    session_destroy();
    sleep(3);
    include '../../index.php';
    echo '<p class="mensajeNotificacion" >Se cerro correctamente la Sesion</p>';
?>