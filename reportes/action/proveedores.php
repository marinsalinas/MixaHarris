<?php
 
 echo "action_proveedores";
 require_once ("../lib/reportes_lib.php");
 require_once ("../view/rep_proveedores.php");
 
  $proveedor=proveedores_list();
  lista_proveedor($proveedor);
  form_searchbyproveedor();
  
?>