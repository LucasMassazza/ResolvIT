<?php
    session_start();
    include 'conexion_mysql.php';
    error_reporting(E_ALL ^ E_NOTICE);
    $usuarioActual = $_SESSION['usuario'];
    $query = mysqli_query($conn,"SELECT nombre, apellido FROM login WHERE usuario='$usuarioActual'");
    if($query && mysqli_num_rows($query)>0){
        $registro = mysqli_fetch_assoc($query);
        $nombre = $registro['nombre'];
        $apellido = $registro['apellido'];
        echo '<p>'.$nombre.', '.$apellido.'</p>';
    }
?>
