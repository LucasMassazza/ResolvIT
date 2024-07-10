<?php
    include 'obtener_incidentes.php'; 
                if (!empty($incidentes)) {
                    foreach ($incidentes as $incidente) {
                        echo "<tr>";
                        echo "<td>{$incidente['numero_incidente']}</td>";
                        echo "<td>{$incidente['usuario']}</td>";
                        echo "<td>{$incidente['fecha_creacion']}</td>";
                        echo "<td>{$incidente['descripcion']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay incidentes registrados</td></tr>";
                }