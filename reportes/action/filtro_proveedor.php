<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_proveedores.php");

 echo "filtro_proveedores.php";

$info= $_POST['info'];
echo $info;

$filter_proveedor=proveedor_searchbyproveedor($info);
lista_proveedor ($filter_proveedor);

?>