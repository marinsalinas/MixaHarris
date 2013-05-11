<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Se dio de alta</title>
<body>
	<h1>Se dio de alta el usuario</h1>
	<?php
	echo "FUNCION ACTIVA";
	header('Content-Type: text/html; charset=UTF-8');
	require_once( '../lib/formularios_lib.php');

	$cliente=array();
	$datosCliente = array("nombre","apellidos", "direccion","CP","email", "tel", "username", "cel", "ocupacion",
	 "sexo");//se obtiene de los names del formulario
	foreach($datosCliente as $key => $datoCliente){
	$cliente[]= $_POST[$datoCliente];
	}
	$cliente[]=$_POST['anio']."-".$_POST['mes']."-".$_POST['dia'];//Concatena para tener el formato "YYYY-mm-dd" para MySQL
	$cliente[]=md5($_POST['pass']);
	echo"<pre>\n";
		print_r($cliente);
	echo"</pre\n>";

	//El primer paso es contruir la instruccion en mysql se construye a partir de los datos del arreglo $cliente[];
	$sql = "INSERT INTO mixaharris.clientes (idclientes, clientesNombre, clientesApellido, clientesDireccion, clientesCP, clientesEmail, clientesTelefono, clientesUsername, ClientesCelular, clientesOcupacion, clientesSexo, clientesNacimiento, clientesPassword)
	 VALUES (NULL, '$cliente[0]', '$cliente[1]', '$cliente[2]', '$cliente[3]', '$cliente[4]', '$cliente[5]', '$cliente[6]', '$cliente[7]', '$cliente[8]', '$cliente[9]', '$cliente[10]', '$cliente[11]');";
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