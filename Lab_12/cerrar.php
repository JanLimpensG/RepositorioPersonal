<?php

session_start();

include("partials/_header.html");

include("partials/_nav.html");

session_unset();

session_destroy();

echo "<h3> Su sesión se cerró exitosamente </h3>";


include("partials/_footer.html");

?>