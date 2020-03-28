<?php

session_start();


include("partials/_header.html");

include("partials/_nav.html");

$_SESSION["nom"] = htmlspecialchars($_POST["nombre"]);
$_SESSION["usu"] = htmlspecialchars($_POST["user"]);
$_SESSION["con"] = htmlspecialchars($_POST["contra"]);

echo '<div class="container">';
echo "<h3> Informacion de la sesión:  </h3><p> Acutalmente la sesion pertenece a: ".$_SESSION["nom"]." con nombre de usuario:  ".$_SESSION["usu"].", gracias por confiar en nuestra pagina, ";
echo "a continuacion se mostrara tu información para que puedas confirmarla</p>";


echo "<h4> Constraseña </h4>";
echo "<p>Tu contraseña es: ".$_SESSION["con"] ."</p>";

echo "<h4> Foto subida </h4>";
echo "<p>Tu foto es : ".$_SESSION["con"] ."</p>";



include("partials/_formFoto.html");


echo '</div>';

include("partials/_footer.html");

?>