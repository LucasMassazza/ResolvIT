<?php
    error_reporting(0);
    session_start();
    include 'conexionMysql.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_SESSION['idUsuario']) && isset($_POST['clave'])) {
            $id = $_SESSION['idUsuario'];
            $clave = $_POST['clave'];
            $id = mysqli_real_escape_string($conn, $id);
            $clave = mysqli_real_escape_string($conn, $clave);
            $sql = "UPDATE login SET clave = '$clave' WHERE id_login = '$id'";
            if (mysqli_query($conn, $sql)) {
            } else {
                echo "Error updating password: " . mysqli_error($conn);
            }
        } else {
            echo "Invalid session or input.";
        }
    } else {
        echo "Invalid request method.";
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ResolvIT - Cambio Clave</title>
        <link rel="stylesheet" href="/css/css.css">
        <link rel="shortcut icon" href="/images/servicio-al-cliente.png" type="image/x-icon">
    </head>
<body class="ocuparResto">
    <?php include '../elementos/header.php';?>
    <main class="creacionExitosa flexColumn ">
        <h1>Se cambio la Clave</h1>
        <button class="buttonIncidente fontMediana" onclick="redirigirInicio()">Volver al Inicio</button>
    </main>
</body>
<script>
    function redirigirInicio() {
        window.location.href = '/php/principal.php'
    }
</script>
</html>
