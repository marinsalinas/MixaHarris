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
	
require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_cliente.php");
//retorna la tabla resultado de la busqueda moodif//
$info= $_POST['info'];
$filter_empresa=cliente_fliter($info);
lista_cliente($filter_empresa);
?>