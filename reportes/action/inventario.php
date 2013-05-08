<?php
 
 echo "action_inventario";
 require_once ("../lib/reportes_lib.php");
 require_once ("../view/rep_inventario.php");
 
  $inventario=inventario_list();
  lista_inventario($inventario);
  form_searchbymovimiento();
 

?>