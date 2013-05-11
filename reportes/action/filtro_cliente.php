<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_cliente.php");
//retorna la tabla resultado de la busqueda moodif//
$info= $_POST['info'];
$filter_empresa=cliente_fliter($info);
lista_cliente($filter_empresa);

?>