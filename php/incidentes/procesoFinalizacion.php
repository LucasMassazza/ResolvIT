<?php

    session_start();
    require 'conexionMysql.php';
    $idAsignacion = $_GET['idAsignacion'];
    $idIncidente = $_GET['idIncidente'];
    echo $idAsignacion,$idIncidente;
    $modificacionInc = "UPDATE incidente SET estado = 2 WHERE idIncidente = $idIncidente";
    $eliminacionAsignacion =   "DELETE FROM asignacionincidente WHERE idasignacion=$idAsignacion";

    mysqli_query($conn,$modificacionInc);
    mysqli_query($conn,$eliminacionAsignacion);
    header("Location: consolaIncidentesTecnico.php");