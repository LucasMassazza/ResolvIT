<?php
    error_reporting(1);
    session_destroy();
    sleep(3);
    include __DIR__.'/../../index.php';
    echo '<p class="mensajeNotificacion" >Se cerro correctamente la Sesion</p>';
?>