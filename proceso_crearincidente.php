<?php
    error_reporting(1);
    session_start();
    include 'conexion_mysql.php';
    $descripcion = $_POST['descripcion'];
    $resumen = $_POST['resumen'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $mail = $_SESSION['mail'];
    $fecha = date('m/d/Y');

    $query = "INSERT INTO `incidente`(`nombre`, `resumen`, `fecha_creacion`, `descripcion`, `apellido`, `mail`) VALUES ('$nombre','$resumen','$fecha','$descripcion','$apellido','$mail')";
    mysqli_query($conn,$query);
    include 'crear_incidente.php';
    echo '<p class="mensajeNotificacion">Se creo el Incidente Correctamente</p>';