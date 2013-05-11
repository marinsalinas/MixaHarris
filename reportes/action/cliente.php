<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MixaHarris - Reporte de Cleintes/Usuarios</title>
</head>
<body>
<?php
 //Este tambien lo modifique 10/may/2013
 //echo "action_cliente";
 header('content-type text/html charset=utf-8');
 require_once ("../lib/reportes_lib.php");
 require_once ("../view/rep_cliente.php");
 //tambien modifique este archivo con sus respectivos nombres de funcion
  $cliente=cliente_list();
  lista_cliente ($cliente);
  form_fliterCliente();
?>
</body>
</html>