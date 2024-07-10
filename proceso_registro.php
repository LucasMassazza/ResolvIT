<?php
    session_start();
    include "conexion_mysql.php";
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $administrador = 0;

    mysqli_query($conn, "INSERT INTO `login`(`usuario`, `clave`, `administrador`, `nombre`, `apellido`, `mail`) VALUES ('$usuario','$clave','$administrador','$nombre','$apellido','$mail')");
    include "index.php";
    echo '<p class="mensajeNotificacion">Usuario Creado correctamente</p>';
?>