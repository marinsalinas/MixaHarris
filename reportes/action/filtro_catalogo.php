<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_catalogo.php");

 echo "filtro_catalogo.php";

$info= $_POST['info'];
echo $info;

$filter_nombre=catalogo_searchbycatalogo($info);
lista_catalogo ($filter_nombre);



?>