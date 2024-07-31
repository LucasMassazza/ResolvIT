<?php
    error_reporting(0);
    include 'conexionMysql.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
        $clave = mysqli_real_escape_string($conn, $_POST['clave']);
        $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($conn, $_POST['apellido']);
        $mail = mysqli_real_escape_string($conn, $_POST['mail']);
        $tipoUsuario = mysqli_real_escape_string($conn, $_POST['tipoUsr']);
        $sql = "SELECT * FROM login WHERE usuario = '$usuario'";
        $resultado = mysqli_query($conn, $sql);
        if ($resultado) {
            if (mysqli_num_rows($resultado) > 0) {
                $frase = "El usuario ingresado ya Existe, Ingrese Otro";
            } else {
                $sql = "INSERT INTO `login`(`usuario`, `clave`, `tipo_usuario`, `nombre`, `apellido`, `mail`) 
                        VALUES ('$usuario', '$clave', '$tipoUsuario', '$nombre', '$apellido', '$mail')";

                if (mysqli_query($conn, $sql)) {
                    $frase = "Se creo el Usuario con Exito";
                } else {
                    $frase = "Error al crear el usuario: " . mysqli_error($conn);
                }
            }
        } else {
            $frase = "Error en la consulta: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    } else {
        $frase = "Método de solicitud no válido";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Crear Incidente</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="shortcut icon" href="../../images/servicio-al-cliente.png" type="image/x-icon">
    <script src="/js/redirigirUsuario.js"></script>
</head>
<body class="ocuparResto">
    <?php include __DIR__.'/../elementos/header.php';?>
    <main class="creacionExitosa flexColumn">
        <h1><?php echo $frase;?></h1>
        <button class="buttonIncidente fontMediana" onclick="redirigirCrear()">Crear Otro</button>
        <button class="buttonIncidente fontMediana" onclick="redirigirInicio()">Volver al Inicio</button>
    </main>
</body>
</html>
