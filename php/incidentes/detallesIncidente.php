<?php
    error_reporting(0);
    session_start();
    require 'conexionMysql.php';

    $idIncidente = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $idIncidente = mysqli_real_escape_string($conn, $idIncidente);

    $query = "
        SELECT 
            i.nombre AS incidente_nombre, 
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

    $consulta = mysqli_query($conn, $query);

    if (mysqli_num_rows($consulta) > 0) {
        $resultadoFinal = mysqli_fetch_assoc($consulta);
    } else {
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

        $consulta = mysqli_query($conn, $query);
        if (mysqli_num_rows($consulta) > 0) {
            $resultadoFinal = mysqli_fetch_assoc($consulta);
        } else {
            $resultadoFinal = null;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResolvIT - Detalle Incidente</title>
    <link rel="stylesheet" href="/css/css.css">
    <link rel="shortcut icon" href="/images/servicio-al-cliente.png" type="image/x-icon">
    <script src="/js/redirigirUsuario.js"></script>
</head>
<body class="ocuparResto">
    <?php include '../elementos/header.php';?>
    <main class='mainPerfilUsuario'>
        <div class="tituloCrearIncidente">
            <article class="marginBottom40px">
                <img src="../../images/perfil.png" alt="Logo Incidente">
                <h1>Perfil</h1>
            </article>
        </div>
        <div class="elementosPerfil">
            <h3>Nombre Usuario</h3>
            <p><?php echo $resultadoFinal['incidente_nombre']?></p>
        </div>
        <div class="elementosPerfil">
            <h3>Categoria Incidente </h3>
            <p><?php echo $resultadoFinal['incidente_categoria']?></p>
        </div>
        <div class="elementosPerfil">
            <h3>Subcategoria Incidente </h3>
            <p><?php echo $resultadoFinal['incidente_subcategoria']?></p>
        </div>
        <div class="elementosPerfil">
            <h3>Fecha Creacion </h3>
            <p><?php echo $resultadoFinal['incidente_fecha']?></p>
        </div>
        <div class="elementosPerfil">
            <h3>Estado </h3>
            <p>
                <?php 
                    if($resultadoFinal['incidente_estado']==0){
                        echo "En Curso";
                    }elseif($resultadoFinal['incidente_estado']==1){
                        echo "Asignado";
                    }else{
                        echo "Finalizado";
                    }
                ?>
            </p>
        </div>
        <?php
            if($resultadoFinal['incidente_estado']==1){
                echo '
                <div class="elementosPerfil">
                    <h3>Técnico</h3>
                    <p>' . htmlspecialchars($resultadoFinal['tecnico_nombre']) . ' ' . htmlspecialchars($resultadoFinal['tecnico_apellido']) . '</p>
                </div>';
            }
        ?>

        <div class="flex">
            <button class="buttonIncidente fontMediana" onclick="redirigirIncidentesUsr()">Incidentes</button>
            <button class="buttonIncidente fontMediana" onclick="redirigirInicio()">Volver al Inicio</button>
        </div>
    </main>
</body>
</html>