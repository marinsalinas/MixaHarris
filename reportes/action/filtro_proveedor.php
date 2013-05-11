<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_proveedor.php");
//retorna la tabla resultado de la busqueda moodif//
$info= $_POST['info'];
$filter_Proveedor=proveedor_filter($info);
lista_proveedor($filter_Proveedor);

?>