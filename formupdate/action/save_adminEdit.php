<!DOCTYPE html>
<html lang='es'>
<head>
	<?php
	session_start();
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	require_once("../lib/edit_lib.php");
	validAdmin();
	$idadmin=$_SESSION['usuario']->idadministrador; //este es el valor del id del usuario en esta sesion
	//$adModif = selectClienteConID($idusr);
	/*echo"<pre>";
	print_r($usrModif);
	echo"</pre>";*/
	?>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Modificar Registros de Clientes</title>
<body>
	
	<h1>Se obtuvieron los datos para modificar</h1>
	<?php
	$adminModif=array();
	$datosAdmin= array("nombre","apellidos", "username","email", "tel","sexo");//se obtiene de los names del formulario
	foreach($datosAdmin as $key => $datoadmin){
	$adminModif[]= $_POST[$datoadmin];
	}
	$adminModif[]=$_POST['anio']."-".$_POST['mes']."-".$_POST['dia'];//Concatena para tener el formato "YYYY-mm-dd" para BD
	
	/*echo "<pre>";
	print_r($adminModif);
	echo "</pre>";
	echo "<p>";*/
	updateAdminConID($adminModif, $_SESSION['usuario']->idadministrador);
	header('Location: ../../main/pagindex/adminindex.php');

	echo"<p>";
	?>	
</body>
</hmtl>