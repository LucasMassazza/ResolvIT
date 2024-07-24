<?php
    session_start();
    include "conexionMysql.php";
    error_reporting(E_ALL ^ E_NOTICE);
    $usuarioActual = $_SESSION['usuario'];
    $query = mysqli_query($conn,"SELECT nombre, apellido FROM login WHERE usuario='$usuarioActual'");
    if($query && mysqli_num_rows($query)>0){
        $registro = mysqli_fetch_assoc($query);
        $nombre = $registro['nombre'];
        $apellido = $registro['apellido'];
        $mensaje;
        if($_SESSION['tipoUsuario']==0){
            $mensaje="Usuario";
        }elseif($_SESSION['tipoUsuario']==1){
            $mensaje="Tecnico";
        }else{
            $mensaje="Administrador";
        }
        echo    '<div class="nombre">' .
                    '<p>' . $nombre . ' ' . $apellido . '</p>' .
                    '<p class="fontChica">' . $mensaje . '</p>' .
                '</div>';
    }


