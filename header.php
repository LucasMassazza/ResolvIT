<?php
    session_start();
    include 'conexion_mysql.php';
    $usuario=$_SESSION['usuario'];
    if(isset($_SESSION['usuario'])){
        $consulta_adm = mysqli_query($conn, "SELECT * FROM login WHERE usuario='$usuario' AND administrador=1");
        if($consulta_adm->num_rows>0){
            echo '    <a href="inicio.php">Inicio</a>';
            echo '    <a href="incidentes.php">Incidentes</a>';
            echo '    <a href="cerrar_sesion.php">Cerrar Sesión</a>';
            echo '    <a href="admin.php">Portal Admin</a>'; 
        }else{ 
            echo '    <a href="inicio.php">Inicio</a>';
            echo '    <a href="incidentes.php">Incidentes</a>';
            echo '    <a href="cerrar_sesion.php">Cerrar Sesión</a>';
        }
    }
?>

