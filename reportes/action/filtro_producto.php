<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="lib/jquery.js"></script>
	<script type="text/javascript" src="lib/lib.js"></script>
	<title>MixaHarris - Reporte de Cleintes/Usuarios</title>
</head>
<body>
	<?php
	session_start();
	//lo mismo
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	validAdmin();
	//echo "<h1>MixaHarris - Admin Index Nuevo </h1>";
	$admin = $_SESSION['usuario'];
	//print_r($usuario);
	//echo "<div id='navegador'>";
		//echo"<p>"."Bienvenido ".$admin->administradorNombre."<a href='../../login/logout.php'>Logout</a></p>";
	//echo "</div>";
	?>
	<div id='navegador'>
			<div id='homeLogo'>MixaHarris Administrador - Clientes</div>
				<div id='navAdmin'>	
					Hola, <?php echo $admin->administradorNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../../main/pagindex/adminindex.php" title="Menú administrador">conf</a> 
				 </div>
		</div><!--navegador-->

<center><div id='menuProductos'>
						<center><h2>MixaHarris</h2></center>
						</br></br>
							<p class='hdm'>Busqueda</p>
<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_productos.php");
//retorna la tabla resultado de la busqueda moodif//
$info= $_POST['info'];
$filter_Producto=producto_filter($info);
lista_producto($filter_Producto);

?>
</br></br></br>
<center> <a id='aF' href='producto.php'>Regresar</a></center>
</br></br>
					</div></center>


</body>
</html>