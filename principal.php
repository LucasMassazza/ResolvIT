<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <header class="header">
        <span>Mi Sitio</span>
        <nav class="nav-links">
            <?php
                include 'header.php';
            ?>
        </nav>

    </header>

    <main>
    <h1>Lista de Incidentes</h1>
    <table>
        <thead>
            <tr>
                <th>Numero Incidente</th>
                <th>Usuario</th>
                <th>Fecha Creacion</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'tabla_incidentes.php';
            ?>
        </tbody>
    </table>
    </main>

</body>
</html>