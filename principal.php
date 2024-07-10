<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body class="principalBody">
    <header class="headerPrincipal">
        <h2>Gestor Incidencias</h2>
        <p>Hola Lucas Massazza</p>
        <nav class="nav-links">
            <?php
                include 'header.php';
            ?>
        </nav>
    </header>
    <main class="mainPrincipal">
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