<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MixaHarris - Reporte de Proveedores</title>
</head>
<body>
<?php
 //Este tambien lo modifique 10/may/2013
 //echo "action_cliente";
 header('content-type text/html charset=utf-8');
 require_once ("../lib/reportes_lib.php");
 require_once ("../view/rep_proveedor.php");
 //tambien modifique este archivo con sus respectivos nombres de funcion
  $proveedor=proveedores_list();
  lista_proveedor($proveedor);
  form_fliterProveedor();
?>
</body>
</html>