<?php

include("partials/_header.html");

include("partials/_nav.html");

$nom = htmlspecialchars($_POST["nombre"]);
$ape = htmlspecialchars($_POST["apellido"]);
$tel = htmlspecialchars($_POST["telefono"]);
$con = htmlspecialchars($_POST["contra"]);
$conf = htmlspecialchars($_POST["confirmContra"]);
$corr = htmlspecialchars($_POST["mail"]);
$fena = htmlspecialchars($_POST["fecha_nac"]);

echo '<div class="container">';
echo "<h3>Gracias </h3><p>".$nom." ".$ape." por confiar en nuestra pagina, ";
echo "a continuacion se monstrara tu información para que puedas confirmarla</p>";

echo "<h3> Confirme sus datos</h3>";
echo "<h4> Contraseña </h4>";

if($con <> $conf){
	echo "<p>LA CONTRASEÑA QUE PUSISTE NO CONCUERDA CON LA CONTRASEÑA DE CONFIRMACION</p>";
} else {
	echo "<p> La contraseña seleccionada concuerda con la conifirmacion </p>";
}

echo "<h4> Correo electrónico </h4>";
echo "<p>Tu correo electrónico es: ".$corr."</p>";

echo "<h4>Teléfono </h4>";
echo "<p> El teléfono que pusiste es: ".$tel."</p>";

echo "<h4> Fecha de nacimiento</h4>";
echo "<p> Tu fecha de nacimiento es: ".$fena."</p>";

include("partials/_confirma.html");

echo '</div>';

include("partials/_footer.html");

?>