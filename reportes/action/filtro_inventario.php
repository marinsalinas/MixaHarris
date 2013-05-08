<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_inventario.php");

 echo "filtro_inventario.php";

$info= $_POST['info'];
echo $info;

$filter_empresa= inventario_searchbyinventario($info);
lista_inventario($filter_empresa);



?>