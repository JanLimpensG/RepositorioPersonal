<?php

include("partials/_header.html");

include("partials/_nav.html");

echo '<div class="container">';
echo "<h3>Gracias </h3><p>".$_POST["nombre"]." ".$_POST["apellido"]." por confiar en nuestra pagina, ";
echo "a continuacion se monstrara tu información para que puedas confirmarla</p>";

echo "<h3> Confirme sus datos</h3>";
echo "<h4> Contraseña </h4>";

if($_POST["contra"] <> $_POST["confirmContra"]){
	echo "<p>LA CONTRASEÑA QUE PUSISTE NO CONCUERDA CON LA CONTRASEÑA DE CONFIRMACION</p>";
} else {
	echo "<p> La contraseña seleccionada concuerda con la conifirmacion </p>";
}

echo "<h4> Correo electrónico </h4>";
echo "<p>Tu correo electrónico es: ".$_POST["mail"]."</p>";

echo "<h4>Teléfono </h4>";
echo "<p> El teléfono que pusiste es: ".$_POST["telefono"]."</p>";

echo "<h4> Fecha de nacimiento</h4>";
echo "<p> Tu fecha de nacimiento es: ".$_POST["fecha_nac"]."</p>";

include("partials/_confirma.html");

echo '</div>';

include("partials/_footer.html");

?>