<?php
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']);
        include 'conexionMysql.php';
        
        $id = mysqli_real_escape_string($conn, $id);
        
        $sql = "DELETE FROM incidente WHERE idIncidente = $id";
        mysqli_query($conn, $sql);

        include 'consolaIncidentes.php';
        echo '<p class="mensajeNotificacion">El Incidente se Borró Correctamente</p>';
        exit();
    } else {
        echo "ID no proporcionado.";
    }

