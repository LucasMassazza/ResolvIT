<?php
    error_reporting(1);
    session_start();
    if($_SESSION['tipoUsuario']==0){
        echo '
            <li><a href="/php/principal.php">Inicio</a></li>
            <li><a href="/php/consolaIncidentes.php">Mi Actividad</a></li>
        ';
    }else if($tipoUsuario==1){
        echo '
            <li><a href="/php/principal.php">Inicio</a></li>
            <li><a href="/php/consolaIncidentes.php">Mi Actividad</a></li>
        ';
    }else{
        echo '
            <li><a href="/php/principal.php">Inicio</a></li>
            <li><a href="/php/consolaIncidentes.php">Mi Actividad</a></li>
        ';
    }
?>

