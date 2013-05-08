<?php

echo "rep_inventario";
function lista_inventario ($inventario){
	
echo "FUNCION/ACTIVA";

echo "<table border=1>";
echo "<tr>";
echo "<td>id</td>"; 
echo "<td>movimiento</td>";
echo "<td>cantidad</td>";
echo "</tr>";

foreach ($inventario as $key => $inv) {
echo "<tr>";
echo "<td>".$inv->id_producto."</td>"; 
echo "<td>".$inv->movimiento."</td>";
echo "<td>".$inv->cantidad."</td>";
echo "</tr>";

}
echo "</table>";
}


function form_searchbymovimiento(){

echo "<form action='filtro_inventario.php' method='post'>";
echo "Tipo movimiento >";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >"; 
echo "</form>";
}

?>