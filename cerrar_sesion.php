<?php
    session_destroy();
    echo "<h1>Cerrando la Sesion...</h1>";
    sleep(3);
    header("Location: index.php");