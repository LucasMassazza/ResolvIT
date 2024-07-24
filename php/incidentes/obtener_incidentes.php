<?php
    session_start();
    error_reporting(1);
    include 'conexion_mysql.php';
    $name = $_SESSION['nombre'];
    $resultado = mysqli_query($conn,"SELECT idIncidente, nombre, apellido, mail, resumen, fecha_creacion, descripcion FROM incidente WHERE nombre='$name'");
    $tabla = mysqli_fetch_assoc($resultado);
    //  foreach ($tabla as $key => $value) {
    //      echo $value.'<br>';
    // }

