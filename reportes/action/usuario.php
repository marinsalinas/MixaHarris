<?php
 
 echo "action_usuario";
 require_once ("../lib/reportes_lib.php");
 require_once ("../view/rep_usuario.php");
 
  $inventario=usuario_list();
  lista_usuario($inventario);////
  form_searchbyidusuario();
 
 
 
 
 
?>