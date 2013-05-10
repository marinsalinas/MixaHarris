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
	//Con este for each obtenemos el valor del privilegio aunque podemos hacer una arreglo
	//y sería el ultimo indice, pero en este caso no lo ocupamos
	foreach ($usuario as $key => $us) {
		$privilegio = $us;
	}
	//echo "<br>Privilegio:".$privilegio;
	//si privilegio == 1;
	if($privilegio == 1){
		echo"<p>"."Bienvenido ".$usuario->clientesNombre;
	}
	if($privilegio == 0){
		echo"<p>"."Bienvenido ".$usuario->administradorNombre;
	}

	?>
	<a href="../login/logout.php">Logout</a></p>
</body>
</html>