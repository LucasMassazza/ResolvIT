<?php
    error_reporting(0);
    session_start();
    include 'conexionMysql.php';
    $id = intval($_SESSION['idUsuario']);
    $nombre = mysqli_real_escape_string($conn, $_SESSION['nombre']);
    $apellido = mysqli_real_escape_string($conn, $_SESSION['apellido']);
    $categoria = "Solicitud Herramental";
    $subcategoria = mysqli_real_escape_string($conn, $_POST['herramental']);
    $fecha = date('Y/m/d');
    $contacto = mysqli_real_escape_string($conn, $_SESSION['mail']);
    $justificacion = mysqli_real_escape_string($conn, $_POST['justificacion']);
    $nombreCompleto = $nombre . ' ' . $apellido;

    $query = "INSERT INTO incidente (idUsuario, nombre, categoria, subcategoria, date, contacto, descripcion) 
              VALUES ('$id', '$nombreCompleto', '$categoria', '$subcategoria', '$fecha', '$contacto', '$justificacion')";
    mysqli_query($conn, $query);
    include 'creacionExitosa.php';
?>
