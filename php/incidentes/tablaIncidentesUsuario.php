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
                    <th>Incidente</th>
                    <th>Nombre</th>
                    <th>Tema</th>
                    <th>Subtema</th>
                    <th>Fecha Creacion</th>
                    <th>Estado</th>
                    <th>Cancelar</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            if($row['estado']==0){
                $estado = "enProceso";
                $tipoEstado = "En Proceso";
                $rutaImagen = "cerrar";
                $clase = "onclick='confirmarEliminacion(" . $row['idIncidente'] . ")'";
            }elseif($row['estado']==1){
                $estado = "asignado";
                $tipoEstado = "Asignado";
                $rutaImagen = "boton-x";
                $clase = "";
            }else{
                $estado = "finalizado";
                $tipoEstado = "Finalizado";
                $clase="onclick='confirmarEliminacion(" . $row['idIncidente'] . ")'";
                $rutaImagen = "cerrar";
            }
            echo "<tr>
                    <td class=''><a href='detallesIncidente.php?id=" . htmlspecialchars($row['idIncidente']) . "'>" . htmlspecialchars($row['idIncidente']) . "</a></td>
                    <td>" . htmlspecialchars($row['nombre']) . "</td>
                    <td>" . htmlspecialchars($row['categoria']) . "</td>
                    <td>" . htmlspecialchars($row['subcategoria']) . "</td>
                    <td>" . htmlspecialchars($row['date']) . "</td>
                    <td class='".$estado."'>".$tipoEstado."</td>
                    <td class='botonCancelar'>
                        <button $clase>
                            <img src='/images/$rutaImagen.png' alt='Logo Elimiar' class='iconoEliminar'>
                        </button>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No tiene incidentes Generados</p>";
    }
?>

