<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Principal</title>
    <link rel="stylesheet" href="/css/css.css">
    <link rel="shortcut icon" href="/images/servicio-al-cliente.png" type="image/x-icon">
    <script src="/js/redirigirUsuario.js"></script>
    <script src="/js/confirmacionEliminarUsr.js"></script>
    <script src="/js/redirigirEdicion.js"></script>
</head>
<body class="ocuparResto">
    <?php require '../elementos/header.php';?>
    <main class="mainGestorUsuarios">
        <div class="tituloCrearIncidente">
            <article>
                <img src="../../images/agregar-usuario.png" alt="Logo Incidente">
                <h1>Gestor De Usuarios</h1>
            </article>
        </div>
        <div class="divGUTabla">
            <h3>Usuarios Cargados</h3>
            <?php include 'tablaUsuarios.php'; ?>
        </div>
        <div class="botonesCrearUsuario">
            <button class="buttonIncidente fontMediana" onclick="redirigirCrear()">Crear Usuario</button>
            <button class="buttonIncidente fontMediana" onclick="redirigirInicio()">Volver al Inicio</button>
        </div>
    </main>
</body>

</html>