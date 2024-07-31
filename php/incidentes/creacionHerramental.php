<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Crear Incidente</title>
    <link rel="stylesheet" href="/css/css.css">
    <link rel="shortcut icon" href="../../images/servicio-al-cliente.png" type="image/x-icon">
</head>
<body class="bodyCrearIncidente ocuparResto">
    <?php include __DIR__.'/../elementos/header.php'?>
    <main>
        <div class="tituloCrearIncidente">
            <article>
                <img src="../../images/ordenador.png" alt="Logo Incidente">
                <h1>Consola de Solicitante</h1>
            </article>
        </div>
        <div class="seccionCreacion">
            <div>
                <h3>Crear Incidente</h3>
                <p>Para</p>
                <?php require __DIR__.'/../elementos/obtencionNombre.php';?>
            </div>
            <span></span>
            <form action="procesoCrearHerramental.php" method="post">
                <label for="lista1">Herramental</label>
                <select id="herramental" name="herramental" class="fontMediana padding10px">
                    <option value="" disabled selected>Seleccionar Categoría</option>
                    <option value="teclados">Teclados</option>
                    <option value="ratones">Ratones</option>
                    <option value="monitores">Monitores</option>
                    <option value="impresoras">Impresoras</option>
                    <option value="auriculares">Auriculares</option>
                    <option value="altavoces">Altavoces</option>
                    <option value="webcams">Webcams</option>
                    <option value="mousesGaming">Ratones Gaming</option>
                    <option value="tecladosGaming">Teclados Gaming</option>
                    <option value="sillasErgonomicas">Sillas Ergonómicas</option>
                    <option value="escritorios">Escritorios</option>
                    <option value="soportesMonitores">Soportes para Monitores</option>
                    <option value="fuentesAlimentacion">Fuentes de Alimentación</option>
                    <option value="cajas">Cajas/Chasis</option>
                </select>
                <label for="notas">Justificacion</label>
                <textarea class="fontMediana padding10px" id="notas" name="justificacion" rows="6" cols="50" maxlength="500" required></textarea>
                <div>
                    <button type="submit" class="fontMediana buttonIncidente">Solicitar Herramental</button>
                </div>
            </form>
            <article>
                
            </article>
        </div>

        
    </main>
</body>
</html>