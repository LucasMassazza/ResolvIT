<?php 
    error_reporting(0);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Edicion Perfil</title>
    <link rel="stylesheet" href="/css/css.css">
    <link rel="shortcut icon" href="/images/soporte-tecnico.png" type="image/x-icon">
</head>
<body class="ocuparResto">
    <?php include '../elementos/header.php';?>
        
    <main class="mainEdicionPerfil">
        <div class="tituloCrearIncidente">
            <article>
                <img src="../../images/editar.png" alt="Logo Incidente">
                <h1>Editor Usuario</h1>
            </article>
        </div>
        <form action="procesoEdicion.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $_GET['nombre'];?>" maxlength="50">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" value="<?php echo $_GET['apellido'];?>" maxlength="50">
            </div>
            <div class="form-group">
                <label for="mail">Mail</label>
                <input type="email" id="mail" name="mail" value="<?php echo $_GET['mail'];?>" maxlength="50">
            </div>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" value="<?php echo $_GET['usuario'];?>" maxlength="50">
            </div>
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="password" id="clave" name="clave" value="**********" maxlength="50">
            </div>
            <div class="form-group">
                <button type="submit" class="buttonEditar">Actualizar</button>
            </div>
        </form>
    </main>
</body>
</html>


