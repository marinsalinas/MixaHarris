<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido - Usuario</title>
</head>
<body>
	<?php
	session_start();
	require_once("../login/valid.php");
	require_once("../login/validpriv.php");
	//validUser();
	echo "<h1>MixaHarris - User Index </h1>";
	$usuario = $_SESSION['usuario'];
	//print_r($usuario);
		echo"<p>"."Bienvenido ".$usuario->clientesNombre;
	?>
	<a href="../login/logout.php">Logout</a></p>
</body>
</html>