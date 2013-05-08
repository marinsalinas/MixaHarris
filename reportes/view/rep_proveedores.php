<?php

echo "rep_proveedores";

function lista_proveedor ($proveedor) {
	echo "FUNCION/ACTIVA";


echo "<table border=1>";
echo "<tr>";
echo "<td>id</td>"; 
echo "<td>nombre</td>";
echo "<td>contacto</td>";
echo "<td>telefono</td>";
echo "<td>borrar</td>";
echo "</tr>";

foreach ($proveedor as $key => $pro) {
echo "<tr>";
echo "<td>".$pro->id."</td>"; 
echo "<td>".$pro->nombre."</td>";
echo "<td>".$pro->contacto."</td>";
echo "<td>".$pro->telefono."</td>";
echo "<td><a href=del_prov.php?id=".$pro->id.">borrar</td>"; 
echo "</tr>";
	
}

echo "</table>";
}

function form_searchbyproveedor(){

echo "<form action='filtro_proveedor.php' method='post'>";
echo "Nombre proveedor >";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >"; 
echo "</form>";
	
}


?>