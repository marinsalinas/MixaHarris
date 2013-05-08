<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_cliente.php");

 echo "filtro_cliente.php";

$info= $_POST['info'];
echo $info;

$filter_empresa=cliente_searchbyempresa($info);
lista_cliente ($filter_empresa);

?>