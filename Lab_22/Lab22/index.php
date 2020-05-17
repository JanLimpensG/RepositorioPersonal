<?php

    session_start();
    require_once("model.php");
    include("_nav.html");
    $titulo = 'INCIDENTES';
    include("_header.html");


     if (isset($_POST["lugar"])) {
          $lugar = htmlspecialchars($_POST["lugar"]);
      } else {
          $lugar = "";
      }

     if (isset($_POST["tipo"])) {
          $tipo = htmlspecialchars($_POST["tipo"]);
      } else {
          $tipo = "";
      }


    echo '<div class = "container">';
    include ("_selectIndex.html");
    echo '</div>';

    include("_botonAgregar.html");

    echo '<div id="resultados_consulta" class = "container">';
    echo consultar_incidentes($lugar,$tipo);
    echo '</div>';
    
    include("_footer.html");

?>