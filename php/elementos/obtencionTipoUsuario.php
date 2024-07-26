<?php
    error_reporting(0);
    session_start();
    $mensaje;
    if($_SESSION['tipoUsuario']==0){
        $mensaje="Usuario";
    }elseif($_SESSION['tipoUsuario']==1){
        $mensaje="Tecnico";
    }else{
        $mensaje="Administrador";
    }
    echo        '<div class="nombre">' .
                     '<p class="fontChica">' . $mensaje . '</p>' . 
                '</div>';

