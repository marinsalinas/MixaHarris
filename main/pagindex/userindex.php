<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
		<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="lib/jquery.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<title>MixaHarris User</title>
	<title>Bienvenido - Usuario</title>
</head>
<body>
	<?php
	session_start();
	//cambie esto y lo puse dentro de la carpeta para evitarnos algunos errores y ademas no reacer codigo
	//como lo de valid
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	validUser();
	//echo "<h1>MixaHarris - User Index Nuevo </h1>";
	$usuario = $_SESSION['usuario'];
	//print_r($usuario);
	//	echo"<p>"."Bienvenido ".$usuario->clientesNombre;
	?>
	<div id='navegador'>
			<div id='homeLogo'>MixaHarris User Configuracion</div>
				<div id='navAdmin'>	
					Hola, <?php echo $usuario->clientesNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../store/home.php" title="Configurar datos personales">conf</a> 
				 </div>
		</div><!--navegador-->
	<p class='hdm'>Personal:</p>
<ul class='liad'>
	<li><a href=''>Modificar mis datos</a></li>
	<li><a href='../../login/pass/cambiar_pass.php'>Cambiar mi contraseña</a></li>
</ul>
</body>
</html>