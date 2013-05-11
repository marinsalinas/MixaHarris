<?php

require_once ("../lib/reportes_lib.php");
require_once ("../view/rep_productos.php");
//retorna la tabla resultado de la busqueda moodif//
$info= $_POST['info'];
$filter_Producto=producto_filter($info);
lista_producto($filter_Producto);

?>