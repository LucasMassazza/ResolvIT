<?php
    include 'conexionMysql.php';
    error_reporting(E_ALL ^ E_NOTICE);
    $usuario = $_SESSION['usuario'];
    echo    '<div class="nombre">' .
                    '<p>' . $usuario . '</p>' .
                '</div>';
