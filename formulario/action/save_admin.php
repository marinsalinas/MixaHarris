<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Se dio de alta</title>
<body>
	<h1>Se dio de alta el Administrador</h1>
	<?php
	//echo "FUNCION ACTIVA";
	header('Content-Type: text/html; charset=UTF-8');
	require_once( '../lib/formularios_lib.php');

	$admin=array();
	$datosAdmin = array("nombre","apellidos","username","tel", "email");//se obtiene de los names del formulario
	foreach($datosAdmin as $key => $datoAdmin){
	$admin[]= $_POST[$datoAdmin];
	}
	$admin[]=$_POST['anio']."-".$_POST['mes']."-".$_POST['dia'];//Concatena para tener el formato "YYYY-mm-dd" para MySQL
	$admin[]=md5($_POST['pass']);
	echo"<pre>\n";
		print_r($admin);
	echo"</pre\n>";

	//El primer paso es contruir la instruccion en mysql se construye a partir de los datos del arreglo $cliente[];
	$sql = "INSERT INTO MixaHarris.administrador (idadministrador, administradorNombre, administradorApellido, administradorUsername, administradorTelefono, administradorEmail, administradorNacimiento, administradorPassword)
	 VALUES (NULL, '$admin[0]', '$admin[1]', '$admin[2]', '$admin[3]', '$admin[4]', '$admin[5]', '$admin[6]');";
	//echo "<p>".$sql."</p>";
	$result= mysql_query($sql);
	if ($result >0){
		echo "Se ha ingresado la informacion exitosamente";
	}
	else {
		echo  "Existe una inconsistencia en informacion";
	}
	?>
</body>
</hmtl>