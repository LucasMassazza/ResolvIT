<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Crear Incidente</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="shortcut icon" href="../../images/servicio-al-cliente.png" type="image/x-icon">
</head>
<body class="bodyCrearIncidente ocuparResto">
    <?php include __DIR__.'/../elementos/header.php'?>
    <main>
        <div class="tituloCrearIncidente">
            <article>
                <img src="../../images/incidente.png" alt="Logo Incidente">
                <h1>Consola de Solicitante</h1>
            </article>
        </div>
        <div class="seccionCreacion">
            <div>
                <h3>Crear Incidente</h3>
                <p>Peticion Para</p>
                <?php 
                    require __DIR__.'/../elementos/obtencionNombre.php';
                ?>
            </div>
            <span></span>
            <form action="procesoCrearIncidente.php" method="post">
                <label for="lista1">Tema</label>
                <select id="categoria" name="categoria" class="fontMediana padding10px" required>
                    <option value="" disabled selected>Seleccionar Tema</option>
                    <option value="desarrollo">Desarrollo de Software</option>
                    <option value="bases">Administración de Bases de Datos</option>
                    <option value="seguridad">Seguridad Informática</option>
                    <option value="soporte">Soporte Técnico</option>
                    <option value="redes">Redes y Comunicaciones</option>
                    <option value="analisis">Análisis de Datos</option>
                    <option value="gestion">Gestión de Proyectos</option>
                    <option value="ia">Inteligencia Artificial</option>
                    <option value="cloud">Cloud Computing</option>
                    <option value="web">Desarrollo Web</option>
                    <option value="auditoria">Auditoría de Sistemas</option>
                    <option value="testing">Testing y QA (Aseguramiento de Calidad)</option>
                    <option value="iot">IoT (Internet de las Cosas)</option>
                    <option value="automatizacion">Automatización de Procesos</option>
                    <option value="consultoria">Consultoría IT</option>
                </select>
                <label for="lista2">Subtema</label>
                <input class="subcategoria fontMediana padding10px" type="text" name="subcategoria" maxlength="30" required>
                <label for="notas">Descripcion</label>
                <textarea class="fontMediana padding10px" id="notas" name="descripcion" rows="6" cols="50" maxlength="500" required></textarea>
                <div>
                    <button type="submit" class="fontMediana buttonIncidente">Crear Incidente</button>
                </div>
            </form>
            <article>
                
            </article>
        </div>

        
    </main>
</body>
</html>