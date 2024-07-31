<?php
    error_reporting(0);
    $id=$_GET['id'];
    if(isset($id)){

        include 'conexionMysql.php';
        $sql = "DELETE FROM login WHERE id_login = '$id'";
        mysqli_query($conn,$sql);

        include 'gestorUsuario.php';
        echo '
            <p class="mensajeNotificacion marginBottom200px">El usuario a sido eliminado</p>
        ';
        exit();
    } else {
        echo "ID no proporcionado.";
    }
