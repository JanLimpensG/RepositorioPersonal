<?php
    session_start();
    require_once("model.php");
    $lugar = htmlspecialchars($_POST["id_lugar"]);
    $tipo = htmlspecialchars($_POST["id_tipo"]);
    echo consultar_incidentes($lugar,$tipo);
?>