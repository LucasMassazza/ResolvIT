<?php
    error_reporting(1);
    session_start();
    if($_SESSION['tipoUsuario']==0){
        echo '
            <li><a href="/php/principal.php">Inicio</a></li>
            <li><a href="/php/usuario/detallePerfil.php">Perfil</a></li>
        ';
    }else if($_SESSION['tipoUsuario']==1){
        echo '
            <li><a href="/php/principal.php">Inicio</a></li>
            <li><a href="/php/usuario/detallePerfil.php">Perfil</a></li>
        ';
    }else{
        echo '
            <li><a href="/php/principal.php">Inicio</a></li>
            <li><a href="/php/usuario/gestorUsuario.php">Gestor Usuarios</a></li>
        ';
    }
?>

