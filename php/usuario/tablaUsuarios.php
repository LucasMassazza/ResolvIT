<?php
    session_start();
    require 'conexionMysql.php';
    $sql = "SELECT id_login, usuario, nombre, apellido, mail FROM login WHERE tipo_usuario != 2;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1' class='tablaConsulta tablaUsuarios'>
                <tr>
                    <th>ID Usuario</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Contacto</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row['id_login']) . "</td>
                    <td>" . htmlspecialchars($row['usuario']) . "</td>
                    <td>" . htmlspecialchars($row['nombre']) . " ".htmlspecialchars($row['apellido'])."</td>
                    <td>" . htmlspecialchars($row['mail']) . "</td>
                    <td>
                        <button onclick='confirmarEliminacion(" . $row['id_login'] . ")' class='buttonEliminarUsr'>
                            <img src='/images/eliminar.png' alt='Logo Elimiar' class='logoTablaUsr'>
                        </button>
                    </td>
                    <td class='logoTablaUsuarios'>
                        <button onclick=\"redirigirEditar('" . $row['id_login'] . "', '" . $row['nombre'] . "', '" . $row['apellido'] . "', '" . $row['mail'] . "', '" . $row['usuario'] . "')\" class='buttonEliminarUsr'>
                            <img src='/images/editar.png' alt='Logo Elimiar' class='logoTablaUsr'>
                        </button>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay usuarios en el sistema</p>";
    }
?>

