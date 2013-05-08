<?php
 
 echo "action_cliente";
 require_once ("../lib/reportes_lib.php");
 require_once ("../view/rep_cliente.php");
 
  $cliente=cliente_list();
  lista_cliente ($cliente);
  form_searchbyempresa();
  
?>