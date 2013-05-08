<?php

echo "rep_cliente";
function lista_cliente ($cliente) {
	echo "FUNCION/ACTIVA";

echo "<table border=1>";
echo "<tr>";
echo "<td>id</td>"; 
echo "<td>nombre</td>";
echo "<td>apellido</td>";
echo "<td>direccion</td>";
echo "<td>email</td>";
echo "<td>rfc</td>";
echo "<td>telefono</td>";
echo "<td>empresa</td>";
echo "<td>movil</td>";
echo "<td>fecha_ingreso</td>";
echo "</tr>";

foreach ($cliente as $key => $client) {
echo "<tr>";
echo "<td>".$client->id."</td>"; 
echo "<td>".$client->nombre."</td>";
echo "<td>".$client->apellido."</td>";
echo "<td>".$client->direccion."</td>";
echo "<td>".$client->email."</td>";
echo "<td>".$client->rfc."</td>";
echo "<td>".$client->telefono."</td>";
echo "<td>".$client->empresa."</td>";
echo "<td>".$client->movil."</td>";
echo "<td>".$client->fecha_ingreso."</td>";
echo "</tr>";
	
}

echo "</table>";
}

function form_searchbyempresa(){

echo "<form action='filtro_cliente.php' method='post'>";
echo "Nombre empresa >";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >"; 
echo "</form>";
	
}




?>