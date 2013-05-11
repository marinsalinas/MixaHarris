<?php

//echo "rep_proveedor";

/*funcion lista_cliente el cual recibe como argumento un arreglo de objetos $cliente
 *el cuál nos realiza la tabla de los clientes 
 */
function lista_proveedor($proveedor) {
	//echo "FUNCION/ACTIVA";

echo "<table border=1 alling='center'>";
echo "<tr>";
echo "<td>ID</td>";//1 
echo "<td>Proveedor</td>";//2
echo "<td>Contacto</td>";//3
echo "<td>Telefono</td>";//4
echo "<td>Eliminar Registro</td>";
echo "</tr>";

foreach ($proveedor as $key => $prov) {
echo "<tr>";
echo "<td>".$prov->idproveedor."</td>"; 
echo "<td>".$prov->proveedorNombre."</td>";
echo "<td>".$prov->proveedorContacto."</td>";
echo "<td>".$prov->proveedorTelefono."</td>";
echo "<td>"."<a href=del_proveedor.php?id=".$prov->idproveedor.">Eliminar</a></td>";
echo "</tr>";	
}
echo "</table>";
}

function form_fliterProveedor(){

echo "<form action='../action/filtro_proveedor.php' method='post'>";
echo "Filtrar:";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >"; 
echo "</form>";
	
}





?>