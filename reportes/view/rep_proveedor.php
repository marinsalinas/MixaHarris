<?php

//echo "rep_proveedor";

/*funcion lista_cliente el cual recibe como argumento un arreglo de objetos $cliente
 *el cuál nos realiza la tabla de los clientes 
 */
function lista_proveedor($proveedor) {
	//echo "FUNCION/ACTIVA";

echo "<table border=1 alling='center'>";
echo "<tr>";
echo "<th>ID</th>";//1 
echo "<th>Proveedor</th>";//2
echo "<th>Contacto</th>";//3
echo "<th>Telefono</th>";//4
echo "<th>Eliminar Registro</th>";
echo "</tr>";

foreach ($proveedor as $key => $prov) {
echo "<tr>";
echo "<td>".$prov->idproveedor."</td>"; 
echo "<td>".$prov->proveedorNombre."</td>";
echo "<td>".$prov->proveedorContacto."</td>";
echo "<td>".$prov->proveedorTelefono."</td>";
//echo "<td>"."<a href=del_proveedor.php?id=".$prov->idproveedor.">Eliminar</a></td>";
echo "<td>"."<input id='button' type='button' onclick='eliminarProv(".$prov->idproveedor.")' value='Eliminar'></td> ";

echo "</tr>";	
}
echo "</table>";
}

function form_fliterProveedor(){

echo "<form action='../action/filtro_proveedor.php' method='post'>";
echo "</br></br>";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >";
echo "</br></br>"; 
echo "</form>";
	
}





?>