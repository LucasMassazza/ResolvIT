<?php
    session_start();
    require 'conexionMysql.php';
    $idUsuario = $_SESSION['idUsuario'];
    $idUsuario = intval($idUsuario); 
    $consultaIncidente = "SELECT * FROM incidente WHERE estado=0";
    $incidentesUsr = $conn->query($consultaIncidente);
    if ($incidentesUsr->num_rows > 0) {
        echo "<table border='1' class='tablaTecnico'>
                <tr>
                    <th>Incidente</th>
                    <th>Nombre</th>
                    <th>Tema</th>
                    <th>Subtema</th>
                    <th>Fecha Creacion</th>
                    <th>Asignar</th>
                </tr>";
        while ($row = $incidentesUsr->fetch_assoc()) {
            echo "<tr>
                <td>" . htmlspecialchars($row['idIncidente']) . "</td>
                <td>" . htmlspecialchars($row['nombre']) . "</td>
                <td>" . htmlspecialchars($row['categoria']) . "</td>
                <td>" . htmlspecialchars($row['subcategoria']) . "</td>
                <td>" . htmlspecialchars($row['date']) . "</td>
                <td>
                    <button onclick='asignarIncidente(" . $row['idIncidente'] . ")'>
                        <img src='/images/asignacion.png' alt='Logo Elimiar' class='logoAsignar'>
                    </button>
                </td>";
            }
            echo "</table>";
    } else {
        echo "<p>No Hay Incidentes Generados</p>";
    }
    ?>
    
    <?php 
        echo '<h3 class="fontGrande">Incidentes Asignados</h3>';
        require 'conexionMysql.php';
        $idTecnico = $_SESSION['idUsuario'];
        $query = "
                    SELECT i.idIncidente, i.nombre, i.categoria, i.subcategoria, i.date, ai.idasignacion
                    FROM asignacionincidente ai
                    JOIN incidente i ON ai.incidente = i.idIncidente
                    WHERE ai.tecnico = $idTecnico
                ";
        $consultaTecnico = mysqli_query($conn, $query);
        if ($consultaTecnico->num_rows > 0){
            echo "<table border='1' class='tablaTecnico'>
                <tr>
                    <th>Incidente</th>
                    <th>Nombre</th>
                    <th>Tema</th>
                    <th>Subtema</th>
                    <th>Fecha Creacion</th>
                    <th>Finalizar</th>
                </tr>";
            while ($row = $consultaTecnico->fetch_assoc()) {
            echo 
                "<tr>
                    <td>" . htmlspecialchars($row['idIncidente']) . "</td>
                    <td>" . htmlspecialchars($row['nombre']) . "</td>
                    <td>" . htmlspecialchars($row['categoria']) . "</td>
                    <td>" . htmlspecialchars($row['subcategoria']) . "</td>
                    <td>" . htmlspecialchars($row['date']) . "</td>
                    <td>
                        <button onclick='finalizacionIncidente(" . $row['idIncidente'] . "," . $row['idasignacion'] . ")'>
                            <img src='/images/marca-de-verificacion.png' alt='Logo Elimiar' class='logoAsignar'>
                        </button>
                    </td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No Hay Incidentes Asignados</p>";
        }


    
    
    
    
    
    
    
    ?>
    
