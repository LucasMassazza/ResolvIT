<?php
    error_reporting(0);
    session_start();
    include 'conexionMysql.php';

    $nombre = mysqli_real_escape_string($conn, $_SESSION['nombre']);
    $apellido = mysqli_real_escape_string($conn, $_SESSION['apellido']);
    $categoria = mysqli_real_escape_string($conn, $_POST['categoria']);
    $subcategoria = mysqli_real_escape_string($conn, $_POST['subcategoria']);
    $fecha = date('Y/m/d');
    $contacto = mysqli_real_escape_string($conn, $_SESSION['mail']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);
    $id = intval($_SESSION['idUsuario']);
    
    $nombreCompleto = $nombre . ' ' . $apellido;

    $query = "INSERT INTO incidente (idUsuario, nombre, categoria, subcategoria, date, contacto, descripcion) 
            VALUES ('$id', '$nombreCompleto', '$categoria', '$subcategoria', '$fecha', '$contacto', '$descripcion')";
    mysqli_query($conn, $query);

    require 'creacionExitosa.php';
?>

