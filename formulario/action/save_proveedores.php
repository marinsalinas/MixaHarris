<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Alta de Proveedores</title>
<body>
	<h1>Se dio de alta un nuevo proveedor</h1>
	<?php
	//echo "FUNCION ACTIVA";
	header('Content-Type: text/html; charset=UTF-8');
	require_once( '../lib/formularios_lib.php');

	$prov=array();
	$datosProv = array("nombre", "contacto", "tel");//se obtiene de los names del formulario
	foreach($datosProv as $key => $datoProv){
	$prov[] = $_POST[$datoProv];
	}
	//echo"<pre>\n";
		//print_r($prov);
	//echo"</pre\n>";

	/*El primer paso es contruir la instruccion en mysql se construye a partir de los datos del arreglo $cliente[];*/
	$sql = "INSERT INTO mixaharris.proveedor (idproveedor, proveedorNombre, proveedorContacto, proveedorTelefono)
	 VALUES (NULL, '$prov[0]', '$prov[1]', '$prov[2]');";//tuve que cambiar a miinúsculas mixaharris no MixaHarris
	//echo "<p>".$sql."</p>";
	$result= mysql_query($sql);
	if ($result >0){
		echo "Se ha ingresado la informacion exitosamente<br>";

	}
	else {
		echo  "Existe una inconsistencia en informacion<br>";
	}
	?>
	<a href="../view/alta_proveedores.php" target="_self"> <input type="button" name="boton" value="Agregar otro" /> </a>
</body>
</hmtl>