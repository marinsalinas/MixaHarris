<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Alta de Productos</title>
<body>
	<h1>Se dio de alta un nuevo producto</h1>
	<?php
	//echo "FUNCION ACTIVA";
	header('Content-Type: text/html; charset=UTF-8');
	require_once( '../lib/formularios_lib.php');

	$producto=array();
	$datosProducto = array("nombre","marca","modelo","descripcion","precio","tipo");//se obtiene de los names del formulario
	foreach($datosProducto as $key => $datoProducto){
	$producto[] = $_POST[$datoProducto];
	}
	$producto[] = $_POST['garantia'];
	$producto[] = $_POST['proveedor'];
	echo"<pre>\n";
		print_r($producto);
	echo"</pre\n>";

	/*El primer paso es contruir la instruccion en mysql se construye a partir de los datos del arreglo $cliente[];*/
	$sql = "INSERT INTO mixaharris.productos (idproductos, productosNombre, productosMarca, productosModelo, productosDescripcion, productosPrecio, productosTipo, productosGarantia, proveedor_idproveedor)
	 VALUES (NULL, '$producto[0]', '$producto[1]', '$producto[2]', '$producto[3]', '$producto[4]', '$producto[5]', '$producto[6]','$producto[7]' );";
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