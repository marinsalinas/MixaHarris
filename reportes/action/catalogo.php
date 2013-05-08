<?php
 
 echo "action_catalogo";
 require_once ("../lib/reportes_lib.php");
 require_once ("../view/rep_catalogo.php");
 
 
  $catalogo=catalogo_list();
  lista_catalogo ($catalogo);
  form_searchbycatalogo();
?>