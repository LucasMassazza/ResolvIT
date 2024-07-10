<?php
    error_reporting(E_ALL ^ E_WARNING);
    include 'conexion_mysql.php';
    $resultado = mysqli_query($conn,"SELECT * FROM incidente");

    if($result->num_rows>0){
        while($fila=$resultado->fetch_assoc()){
            $incidentes[] = $fila;
        }
    }
?>