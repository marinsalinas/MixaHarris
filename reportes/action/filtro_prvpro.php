<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_catalogo.php");

 echo "filtro_prvpro.php";

$info= $_POST['info'];
echo $info;

$filter_empresa=prv_searchbyprvprod($info);
lista_prvpro ($filter_empresa);

?>