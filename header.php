<?php
    session_start();
    include 'conexion_mysql.php';
    $usuario=$_SESSION['usuario'];
    if(isset($_SESSION['usuario'])){
        $consulta_adm = mysqli_query($conn, "SELECT * FROM login WHERE usuario='$usuario' AND administrador=1");
        if($consulta_adm->num_rows>0){
            echo '    <a class="fontMediana" href="principal.php">Inicio</a>';
            echo '    <a class="fontMediana" href="cerrar_sesion.php">Cerrar Sesión</a>';
        }else{ 
            echo '    <a class="fontMediana" href="principal.php">Inicio</a>';
            echo '    <a class="fontMediana" href="crear_incidente.php">Crear Incidente</a>';
            echo '    <a class="fontMediana" href="cerrar_sesion.php">Cerrar Sesión</a>';
        }
    }
?>

