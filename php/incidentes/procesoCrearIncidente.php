<?php
    error_reporting(0);
    session_start();
    include 'conexionMysql.php';
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $categoria = $_POST['categoria'];
    $subcategoria = $_POST['subcategoria'];
    $fecha = date('Y/m/d');
    $contacto = $_SESSION['mail'];
    $descripcion = $_POST['descripcion'];
    $id = intval($_SESSION['idUsuario']);
    
    $nombreCompleto = $nombre.' '.$apellido;

    $query = "INSERT INTO `incidente`(`idUsuario` ,`nombre`, `categoria`, `subcategoria`, `date`, `contacto`, `descripcion`) VALUES ('$id','$nombreCompleto','$categoria','$subcategoria','$fecha','$contacto', '$descripcion')";
    mysqli_query($conn,$query);
    require 'creacionExitosa.php'
?>

