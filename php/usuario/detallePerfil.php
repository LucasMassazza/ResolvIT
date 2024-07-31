<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Perfil</title>
    <link rel="stylesheet" href="/css/css.css">
    <link rel="shortcut icon" href="/images/soporte-tecnico.png" type="image/x-icon">
    <script src="/js/redirigirCambiarClave.js"></script>
    <script src="/js/confirmacionCambioClave.js"></script>
</head>
<body class="ocuparResto">
    <?php include '../elementos/header.php';?>
    <main class='mainPerfilUsuario'>
        <div class="tituloCrearIncidente">
            <article class="marginBottom40px">
                <img src="../../images/perfil.png" alt="Logo Incidente">
                <h1>Perfil</h1>
            </article>
        </div>
        <div class="elementosPerfil">
            <h3>Nombre </h3>
            <?php include '../elementos/obtencionNombre.php' ?>
        </div>
        <div class="elementosPerfil">
            <h3>Mail </h3>
            <?php include '../elementos/obtencionMail.php'; ?>
        </div>
        <div class="elementosPerfil">
            <h3>Usuario </h3>
            <?php include '../elementos/obtencionUsuario.php'; ?>
        </div>
        <div class="elementosPerfil">
            <h3>Tipo Usuario </h3>
            <?php include '../elementos/obtencionTipoUsuario2.php'; ?>
        </div>
        <div class="change-password-form ">
            <h3>Cambio de Clave</h3>
            <form action="procesoCambioClave.php" method="post">
                <div class="form-group">
                    <label for="clave">Clave Nueva</label>
                    <input type="text" name="clave" id="clave" minlength="8" maxlength="15" required oninput="validarClave()">
                </div>
                <button type="submit" class="buttonIncidente">Cambiar Clave</button>
            </form>
        </div>
    </main>
</body>
</html>