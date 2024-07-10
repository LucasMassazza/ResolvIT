<?php
    include 'obtener_incidentes.php'; 
                if (!empty($tabla)) {
                    echo "<tr>";
                    foreach ($tabla as $clave=>$dato) {
                        echo "<td>$dato</td>";
                    }
                    echo "</tr>";
                } else {
                    echo "<tr><td colspan='4'>No hay incidentes registrados</td></tr>";
                }