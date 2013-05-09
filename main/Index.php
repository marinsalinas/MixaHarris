<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
</head>
<body>
	<?php
	session_start();
	require_once("../login/valid.php");
	$usuario = $_SESSION['usuario'];
	//print_r($usuario);
	echo"<p>"."Bienvenido ".$usuario->clientesNombre;
	?>
	<a href="../login/logout.php">Logout</a></p>
</body>
</html>