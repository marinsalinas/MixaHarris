	<?php
	session_start();
	//require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	require_once("../lib/edit_lib.php");
	//validAdmin();
	?>
<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
<title>MixaHarris - Modificar Registros de Productos</title>
<body>
	<h1>Se obtuvieron los datos para modificar</h1>
	<?php
	$idprod=$_POST['id']; //este es el valor del id del usuario del post con el campo hidden
	$productoModif=array();
	$datosProducto = array("nombre","marca","modelo","descripcion","precio","tipo", "garantia", "proveedor");//se obtiene de los names del formulario
	foreach($datosProducto as $key => $datoProducto){
	$productoModif[] = $_POST[$datoProducto];
	}
	/*echo"<pre>\n";
		print_r($productoModif);
	echo"</pre\n>";*/
	UpdateProductoConID($productoModif, $idprod);

	?>	
</body>
</hmtl>