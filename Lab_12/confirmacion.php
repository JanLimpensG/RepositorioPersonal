<?php

session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

include("partials/_header.html");

include("partials/_nav.html");

$_SESSION["nom"] = htmlspecialchars($_POST["nombre"]);
$_SESSION["usu"] = htmlspecialchars($_POST["user"]);
$_SESSION["con"] = htmlspecialchars($_POST["contra"]);

echo '<div class="container">';
echo "<h3> Informacion de la sesión:  </h3><p> Acutalmente la sesion pertenece a: ".$_SESSION["nom"]." con nombre de usuario:  ".$_SESSION["usu"].", gracias por confiar en nuestra pagina, ";
echo "a continuacion se monstrara tu información para que puedas confirmarla</p>";


echo "<h4> Constraseña </h4>";
echo "<p>Tu contraseña es: ".$_SESSION["con"] ."</p>";

echo "<h4> Foto subida </h4>";
echo "<p>Tu foto es : ".$_SESSION["con"] ."</p>";



include("partials/_confirma.html");


echo '</div>';

include("partials/_footer.html");

?>