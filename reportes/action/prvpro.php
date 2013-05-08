<?php
 
 echo "action_prvprod";
 require_once ("../lib/reportes_lib.php");
 require_once ("../view/rep_cliente.php");
 
  $catalogo=catologo_list();
  lista_prvpro ($catalogo);
  form_searchbyprvprod();
  
?>