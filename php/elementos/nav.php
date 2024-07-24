<?php
    error_reporting(1);
    session_start();
    if($_SESSION['tipoUsuario']==0){
        echo '
            <li><a href="../principal.php">Catalogo</a></li>
            <li><a href="../actividad.php">Mi Actividad</a></li>
        ';
    }else if($tipoUsuario==1){
        echo '
            <li><a href="../principal.php">Catalogo</a></li>
            <li><a href="../actividad.php">Mi Actividad</a></li>
        ';
    }else{
        echo '
            <li><a href="../principal.php">Catalogo</a></li>
            <li><a href="../actividad.php">Mi Actividad</a></li>
        ';
    }
?>

