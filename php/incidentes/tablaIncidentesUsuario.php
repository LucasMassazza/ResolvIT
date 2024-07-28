<?php
    session_start();
    require 'conexionMysql.php';
    $idUsuario = $_SESSION['idUsuario'];
    $idUsuario = intval($idUsuario); 
    $sql = "SELECT * FROM incidente WHERE idUsuario = $idUsuario";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1' class='tablaConsulta'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tema</th>
                    <th>Subtema</th>
                    <th>Fecha Creacion</th>
                    <th>Estado</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td class=''><a href='detallesIncidente.php?id=" . htmlspecialchars($row['idIncidente']) . "'>" . htmlspecialchars($row['idIncidente']) . "</a></td>
                    <td>" . htmlspecialchars($row['nombre']) . "</td>
                    <td>" . htmlspecialchars($row['categoria']) . "</td>
                    <td>" . htmlspecialchars($row['subcategoria']) . "</td>
                    <td>" . htmlspecialchars($row['date']) . "</td>
                    <td class='enProceso'>En proceso</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No tiene incidentes el usuario en cuestión.</p>";
    }
?>