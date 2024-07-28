<?php
    include "../bdd/conexionMysql.php";
    session_start();
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $consulta = mysqli_query($conn, "SELECT * FROM login WHERE usuario='$usuario' AND clave='$clave'" );
    $query = "SELECT nombre, apellido, mail, tipo_usuario, id_login FROM login WHERE usuario='$usuario'";

    if($consulta->num_rows>0){
        $consultaDatos = mysqli_query($conn,$query);
        $resultado = mysqli_fetch_assoc($consultaDatos);
        $_SESSION['usuario']=$usuario;
        $_SESSION['nombre']=$resultado['nombre'];
        $_SESSION['apellido']=$resultado['apellido'];
        $_SESSION['mail']=$resultado['mail'];
        $_SESSION['tipoUsuario']=$resultado['tipo_usuario'];
        $_SESSION['idUsuario']=$resultado['id_login'];
        header("Location: ../principal.php");
        exit();
    }else{
        include("indexLogout.php");
        echo "<p class='mensajeError'>Contraseña o Usuario Incorrecto</p>";
    }
?>