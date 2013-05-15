<!DOCTYPE html>
<html lang='es'>
<head>
	<?php
	session_start();
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	require_once("../lib/edit_lib.php");
	validAdmin();
	$idusr=$_POST['id']; //este es el valor del id del usuario del post con el campo hidden
	?>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Modificar Registros de Clientes</title>
<body>
	<h1>Se obtuvieron los datos para modificar</h1>
	<?php
	$clienteModif=array();
	$datosCliente= array("nombre","apellidos", "direccion","CP","email", "tel", "username", "cel", "ocupacion",
	 "sexo");//se obtiene de los names del formulario
	foreach($datosCliente as $key => $datoCliente){
	$clienteModif[]= $_POST[$datoCliente];
	}
	$clienteModif[]=$_POST['anio']."-".$_POST['mes']."-".$_POST['dia'];//Concatena para tener el formato "YYYY-mm-dd" para BD
	
	/*echo "<pre>";
	print_r($clienteModif);
	echo "</pre>";*/

	echo "<p>";
	updateClienteConID($clienteModif, $idusr);
	echo"<p>";
	?>	
</body>
</hmtl>