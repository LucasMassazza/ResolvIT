<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Crear Incidente</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="shortcut icon" href="../../images/servicio-al-cliente.png" type="image/x-icon">
</head>
<body class="ocuparResto">
    <?php include __DIR__.'/../elementos/header.php';?>
    <main class="creacionExitosa flexColumn">
        <h1>Se Genero el Incidente</h1>
        <p>En la brevedad deberia contactarse por mail el tecnico designado</p>
        <button class="buttonIncidente fontMediana" onclick="redirigirCrear()">Crear Otro</button>
        <button class="buttonIncidente fontMediana" onclick="redirigirInicio()">Volver al Inicio</button>
    </main>
    <script>
        function redirigirCrear() {
            window.location.href = '/php/incidentes/creacionIncidente.php';
        }
        function redirigirInicio() {
            window.location.href = '/php/principal.php'
        }
    </script>
</body>
</html>