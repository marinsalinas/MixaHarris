<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_usuario.php");

 echo "filtro_usuario.php";

$info= $_POST['info'];
echo $info;

$filter_usuario=usuario_searchbyidusuario($info);
lista_usuario ($filter_usuario);


?>