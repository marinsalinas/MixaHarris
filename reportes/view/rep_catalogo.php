<?php

echo "rep_catalogo";
function lista_catalogo($catalogo) {
	echo "FUNCION/ACTIVA";
	
echo "<table border=1>";
echo "<tr>";
echo "<td>id</td>"; 
echo "<td>nombre</td>";
echo "<td>descripcion</td>";
echo "<td>serie</td>";
echo "<td>sku</td>";
echo "<td>proveedor</td>";
echo "</tr>";

foreach ($catalogo as $key => $cat) {
echo "<tr>";
echo "<td>".$cat->id."</td>"; 
echo "<td>".$cat->nombre."</td>";
echo "<td>".$cat->descripcion."</td>";
echo "<td>".$cat->serie."</td>";
echo "<td>".$cat->sku."</td>";
echo "<td>".$cat->proveedor."</td>";
echo "</tr>";
	
}

echo "</table>";
}


function form_searchbycatalogo(){
echo "<form action='filtro_catalogo.php' method='post'>";
echo "Nombre producto >";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >"; 
echo "</form>";
	
}

?>