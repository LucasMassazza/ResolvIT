<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Crear Usuario</title>
    <link rel="stylesheet" href="/css/css.css">
    <link rel="shortcut icon" href="/images/servicio-al-cliente.png" type="image/x-icon">
</head>
<body>
    <?php require '../elementos/header.php'; ?>
    <main class="flexColumn mainCrearUsuario">
        <div class="tituloCrearIncidente">
            <article>
                <img src="../../images/agregar-usuario.png" alt="Logo Incidente">
                <h1>Creacion de Usuario</h1>
            </article>
        </div>
        <div class="form-container">
            <form action="procesoCrearUsr.php" method="post">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="clave">Clave Provisional</label>
                    <input type="text" id="clave" name="clave" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" required>
                </div>
                <div class="form-group">
                    <label for="mail">Mail de Contacto</label>
                    <input type="email" id="mail" name="mail" required>
                </div>
                <div class="form-group">
                    <label for="opciones">Tipo de Usuario</label>
                    <select id="tipoUsr" name="tipoUsr" required>
                        <option value="" disabled selected>Tipo Usuario</option>
                        <option value="0">Usuario</option>
                        <option value="1">Tecnico</option>
                        <option value="2">Administrador</option>
                    </select>
                </div>
                <div class="submitButton">
                    <input type="submit" value="Registrar" class="buttonIncidente">
                    <button type="button" onclick="window.history.back()" class="buttonIncidente">Volver</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>