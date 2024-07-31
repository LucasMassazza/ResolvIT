<?php
session_start();
require 'conexionMysql.php';

$idIncidente = 12; // Puedes obtener esto de $_GET o de otra manera según tus necesidades

// Primera consulta
$query = "
    SELECT 
        i.nombre AS usuario_nombre, 
        i.categoria AS incidente_categoria, 
        i.subcategoria AS incidente_subcategoria, 
        i.date AS incidente_fecha, 
        i.estado AS incidente_estado, 
        l.nombre AS tecnico_nombre,
        l.apellido AS tecnico_apellido
    FROM 
        asignacionincidente ai
    JOIN 
        incidente i ON ai.incidente = i.idIncidente
    JOIN 
        login l ON ai.tecnico = l.id_login
    WHERE 
        i.idIncidente = $idIncidente";

// Ejecutar la primera consulta
$consulta = mysqli_query($conn, $query);

if (isset($consulta)) {
    // En caso de error en la primera consulta, ejecutar la segunda consulta
    $query = "
        SELECT 
            i.nombre AS incidente_nombre, 
            i.categoria AS incidente_categoria, 
            i.subcategoria AS incidente_subcategoria, 
            i.date AS incidente_fecha, 
            i.estado AS incidente_estado
        FROM 
            incidente i
        WHERE 
            i.idIncidente = $idIncidente";

    // Ejecutar la segunda consulta
    $consulta = mysqli_query($conn, $query);
}

// Obtener los resultados
$resultadoFinal = mysqli_fetch_assoc($consulta);

// Mostrar los resultados
print_r($resultadoFinal);

// Cerrar la conexión
mysqli_close($conn);
?>