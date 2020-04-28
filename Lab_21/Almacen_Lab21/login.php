	<!-- Login -->
<!--	<div class="container login">
		<div class="row">
			<div class="col s3"></div>
			<div class="col s6">
				<h2 class="center">Inicio de Sesión</h2>
			<form method="POST" action="index.php" enctype="multipart/form-data" autocomplete="off">
				<label>Usuario: </label>
				<input type="text" name="usuario"><br>
				<label>Contraseña: </label>
				<input type="password" name="password"><br>
				<input type="submit" name="enviar" value="enviar">
			</form>
			</div>
		</div>
	</div>
-->
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Iniciar Sesion </h2>
    <h2 class="inactive underlineHover"> Registrarse </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form  method="POST" action="index.php" enctype="multipart/form-data" autocomplete="off">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
      <input type="submit" name = "enviar"  class="fadeIn fourth" value="Iniciar Sesion">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
    </div>

  </div>
</div>
    

    </div> <!-- fin del .container -->