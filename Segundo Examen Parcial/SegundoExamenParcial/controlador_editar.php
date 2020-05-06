<?php 
  session_start();
  require_once("model.php");  

  $id_zombie = htmlspecialchars($_GET["zombie_id"]);

  $titulo = "Editar el zombie ".$id_zombie;

  include("_header.html");

  $estado_id = recuperar_lugar($id_zombie);

   $editar = 1;

  include("_formEditar.html"); 

  include("_footer.html"); 
?>