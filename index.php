<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
  	<meta name="keywords" content="">
 	<meta name="author" content="Antonio González">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Login </title>
	
	<!--archivos css necesarios -->
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<!-- archivos js necesarios-->
	<!--
	<script type="text/javascript" src="js/"></script>
	-->
</head>
<body>
	<header>

	</header>
	<nav id="nav">
		<ul id="nav_ul" class="nav">
			<li class="li_ul"><a href="login.php">Index</a></li>
			<li class="li_ul"><a href="#">Opciones</a></li>
		</ul>
	</nav>
	<section>
		<form method="POST" action="acciones/verificar_login.php">
			<fieldset>

			<legend id="formulario">Login</legend>
			<div>
				<label>IP : </label><input type="text" size="50" maxlength="50" value="192.168.0.94" style="width: 200px;"><br><br>
			</div>
			<div>
				<label>Usuario : </label><input type="text" name="nombre" size="50" maxlength="50" style="width: 200px;" autofocus="autofocus"><br><br>
			</div>
			<div>
				<label>Contraseña : </label> <input type="password" name="contrasenha" size="50" style="width: 200px;" maxlength="255">
			</div>
			<br><br>
			<input type="submit" name="enviar" value="loguear" style="width: 120px; height: 30px; font-size: 14pt;" />
			<input type="reset" name="cancel" value="cancelar" style="width: 120px; height: 30px; font-size: 14pt;" />
			</fieldset>
		</form>
	</section>
	<?php

	?>
</body>
</html>