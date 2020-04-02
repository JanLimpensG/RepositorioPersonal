<?php 
  require_once("model.php");  

  $_POST["desc"] = htmlspecialchars($_POST["desc"]);
  $_POST["num"] = htmlspecialchars($_POST["num"]);

  if((isset($_POST["desc"])) && (isset($_POST["num"]))) {
      insertar_proyecto($_POST["num"], $_POST["desc"]);
  }

  header("location:index.php");
?>