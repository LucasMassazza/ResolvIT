<?php
    error_reporting(0);
    session_start();
    include 'conexionMysql.php';
    $id = intval($_SESSION['idUsuario']);
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $categoria = "Solicitud Herramental";
    $subcategoria = $_POST['herramental'];
    $fecha = date('Y/m/d');
    $contacto = $_SESSION['mail'];
    $justificacion = $_POST['justificacion'];
        
    $nombreCompleto = $nombre.' '.$apellido;

    $query = "INSERT INTO `incidente`(`idUsuario` ,`nombre`, `categoria`, `subcategoria`, `date`, `contacto`, `descripcion`) VALUES ('$id','$nombreCompleto','$categoria','$subcategoria','$fecha','$contacto', '$justificacion')";
    mysqli_query($conn,$query);
    require 'creacionExitosa.php'
?>
