<?php
    include "conexion_mysql.php";
    session_start();
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $consulta = mysqli_query($conn, "SELECT * FROM login WHERE usuario='$usuario' AND clave='$clave'" );
    

    if($consulta->num_rows>0){
        $_SESSION['usuario'] = $usuario;
        header("Location: principal.php");
    }else{
        include("index.php");
        echo "<p class='mensajeError'>Contraseña o Usuario Incorrecto</p>";
    }
?>