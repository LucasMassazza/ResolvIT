<?php
    session_start();
    include 'conexion_mysql.php';

    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $clave = mysqli_real_escape_string($conn, $_POST['clave']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($conn, $_POST['apellido']);
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $administrador = 0;

    $query = "INSERT INTO login (usuario, clave, administrador, nombre, apellido, mail) 
            VALUES ('$usuario', '$clave', $administrador, '$nombre', '$apellido', '$mail')";
    mysqli_query($conn, $query);

    include 'index.php';
    echo '<p class="mensajeNotificacion">Usuario Creado correctamente</p>';
?>