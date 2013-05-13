<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido Adminstrador</title>
</head>
<body>
	<?php
	session_start();
	//lo mismo
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	validAdmin();
	echo "<h1>MixaHarris - Admin Index Nuevo </h1>";
	$admin = $_SESSION['usuario'];
	//print_r($usuario);
		echo"<p>"."Bienvenido ".$admin->administradorNombre;
	?>
	<a href="../../login/logout.php">Logout</a></p>
</body>
</html>