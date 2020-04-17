<?php
    session_start();
    require_once("model.php");
    $estado = htmlspecialchars($_GET["estado"]);
    echo consultar_proyectos($estado);
?>