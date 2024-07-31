<?php
    session_start();
    include 'conexionMysql.php';
    $tipoUsr = $_SESSION['tipoUsuario'];

    if($tipoUsr==0){
        $tipoUsr = "Usuario";
    }elseif($tipoUsr==1){
        $tipoUsr = "Tecnico";
    }else{
        $tipoUsr = "Administrador";
    }

    echo    '<div class="nombre">' .
                    '<p>' . $tipoUsr . '</p>' .
                '</div>';