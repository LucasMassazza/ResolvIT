<?php
    error_reporting(1);
    session_start();
    if($_SESSION['tipoUsuario']==0){
        include 'consolaSolicitante.php';
        include 'consolaHerramental.php';
        include 'consolaIncidencias.php';
    }elseif($_SESSION['tipoUsuario']==1){
        include 'consolaIncidenciasTecnico.php';
    }elseif($_SESSION['tipoUsuario']==2){
        include 'consolaGestorUsuarios.php';
    }else{

    }
