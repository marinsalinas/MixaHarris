<?php
//Esta se me dificulta por que tienes 3 llaves primarias que solo deberia tener 2
// que es el id del movimiento y el id en relacion con el producto - Marin /11/mayo
echo "rep_inventario";
function lista_inventario ($inventario){
	
echo "FUNCION/ACTIVA";

echo "<table border=1>";
echo "<tr>";
echo "<td>ID</td>"; 
echo "<td>Movimiento</td>";
echo "<td>Cantidad</td>";
echo "</tr>";

foreach ($inventario as $key => $inv) {
echo "<tr>";
echo "<td>".$inv->id_prooducto."</td>"; 
echo "<td>".$inv->movimiento."</td>";
echo "<td>".$inv->canetidad."</td>";
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