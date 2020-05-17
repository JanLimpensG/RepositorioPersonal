<?php
  session_start();
  require_once("model.php");  

  $_POST["tipo"] = htmlspecialchars($_POST["tipo"]);
  $_POST["lugar"] = htmlspecialchars($_POST["lugar"]);

  if((isset($_POST["tipo"])) && (isset($_POST["lugar"]))) {
      if (insertar_incidente($_POST["tipo"], $_POST["lugar"])) {
          $_SESSION["mensaje"] = "Se registró el nuevo incidente";
      } else {
          $_SESSION["warning"] = "Ocurrió un error al registrar el incidente";
      }
  }

  header("location:index.php");
?>