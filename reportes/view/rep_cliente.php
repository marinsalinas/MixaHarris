<?php

//echo "rep_cliente";

/*funcion lista_cliente el cual recibe como argumento un arreglo de objetos $cliente
 *el cuál nos realiza la tabla de los clientes 
 */
function lista_cliente ($cliente) {
	//echo "FUNCION/ACTIVA";

echo "<section id='tlb'><table>";
echo "<tr>";
echo "<th>ID</th>";//1 
echo "<th>Nombre(s)</th>";//2
echo "<th>Apellidos</th>";//3
echo "<th>Drecci&oacute;n</th>";//4
echo "<th>C&oacute;digo Postal</th>";//5
echo "<th>Email</th>";//6
echo "<th>Tel&eacute;fono</th>";//7 telefono
echo "<th>M&oacute;vil</th>";//8 móvil
echo "<th>Fecha Nacimiento</th>";//9
echo "<th>Sexo</th>";//10
echo "<th>Ocupaci&oacute;n</th>";//11 Ocupacion
echo "<th>Username</th>";//12
echo "<th>Eliminar Registro</th>";
echo "<th>Editar Registro</th>";
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
//echo "<td>"."<a href=del_cliente.php?id=".$client->idclientes.">Eliminar</a></td> ";
echo "<td>"."<input type='button' onclick='eliminarUsr(".$client->idclientes.")' value='Eliminar'></td> ";
echo "<td>"."<a href=../../formupdate/view/edit_clienteRep.php?id=".$client->idclientes.">Editar</a></td> ";
echo "</tr>";	
}
echo "</table><section>";
}


function form_fliterCliente(){

echo "<form action='../action/filtro_cliente.php' method='post'>";
echo "</br></br>";
echo "<center><input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit' value='BUSCAR' ></center>"; 
echo "</br></br>";
echo "</form>";
	
}





?>