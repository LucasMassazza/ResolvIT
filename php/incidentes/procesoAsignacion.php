<?php
    session_start();
    require 'conexionMysql.php';
    $idTecnico = $_SESSION['idUsuario'];
    $idIncidente = isset($_GET['id']) ? intval($_GET['id']) : 0;
    if ($idIncidente > 0) {
        $idTecnico = mysqli_real_escape_string($conn, $idTecnico);
        $idIncidente = mysqli_real_escape_string($conn, $idIncidente);

        $modificacionInc = "UPDATE incidente SET estado = 1 WHERE idIncidente = $idIncidente";
        mysqli_query($conn, $modificacionInc);

        $insercionAsignacion = "INSERT INTO asignacionincidente (tecnico, incidente) VALUES ('$idTecnico', '$idIncidente')";
        mysqli_query($conn, $insercionAsignacion);
    }
    mysqli_close($conn);
    header("Location: consolaIncidentesTecnico.php");
    exit();