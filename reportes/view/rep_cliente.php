<?php

//echo "rep_cliente";

/*funcion lista_cliente el cual recibe como argumento un arreglo de objetos $cliente
 *el cuál nos realiza la tabla de los clientes 
 */
function lista_cliente ($cliente) {
	//echo "FUNCION/ACTIVA";

echo "<table border=1 alling='center'>";
echo "<tr>";
echo "<td>ID</td>";//1 
echo "<td>Nombre(s)</td>";//2
echo "<td>Apellidos</td>";//3
echo "<td>Drecci&oacute;n</td>";//4
echo "<td>C&oacute;digo Postal</td>";//5
echo "<td>Email</td>";//6
echo "<td>Tel&eacute;fono</td>";//7 telefono
echo "<td>M&oacute;vil</td>";//8 móvil
echo "<td>Fecha Nacimiento</td>";//9
echo "<td>Sexo</td>";//10
echo "<td>Ocupaci&oacute;n</td>";//11 Ocupacion
echo "<td>Username</td>";//12
echo "<td>Eliminar Registro</td>";
echo "</tr>";

foreach ($cliente as $key => $client) {
echo "<tr>";
echo "<td>".$client->idclientes."</td>"; 
echo "<td>".$client->clientesNombre."</td>";
echo "<td>".$client->clientesApellido."</td>";
echo "<td>".$client->clientesDireccion."</td>";
echo "<td>".$client->clientesCP."</td>";
echo "<td>".$client->clientesEmail."</td>";
echo "<td>".$client->clientesTelefono."</td>";
echo "<td>".$client->clientesCelular."</td>";
echo "<td>".$client->clientesNacimiento."</td>";
echo "<td>".$client->clientesSexo."</td>";
echo "<td>".$client->clientesOcupacion."</td>";
echo "<td>".$client->clientesUsername."</td>";
echo "<td>"."<a href=del_cliente.php?id=".$client->idclientes.">Eliminar</a></td> ";
echo "</tr>";	
}
echo "</table>";
}

function form_fliterCliente(){

echo "<form action='../action/filtro_cliente.php' method='post'>";
echo "Filtrar:";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >"; 
echo "</form>";
	
}





?>