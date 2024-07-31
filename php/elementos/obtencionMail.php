<?php
    session_start();
    include "conexionMysql.php";
    error_reporting(E_ALL ^ E_NOTICE);
    $id = $_SESSION['idUsuario'];
    $query = mysqli_query($conn,"SELECT * FROM login WHERE id_login=$id");
    if($query && mysqli_num_rows($query)>0){
        $registro = mysqli_fetch_assoc($query);
        $mail = $registro['mail'];
        echo    '<div class="nombre">' .
                    '<p>' . $mail . '</p>' .
                '</div>';
    }