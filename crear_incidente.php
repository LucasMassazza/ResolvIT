<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion Incidente</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <header class="headerHorizontal">
        <div>
            <h2>Gestor Incidencias</h2>
            <?php
                session_start();
                error_reporting(E_ALL ^ E_NOTICE);
                $usuario = $_SESSION['usuario'];
                echo '<p>'.$usuario.'</p>';
            ?>
        </div>
        <nav class="nav-links">
            <?php
                include 'header.php';
            ?>
        </nav>
    </header>
    <main>

    </main>
</body>
</html>