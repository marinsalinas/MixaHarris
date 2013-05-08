<?php

echo "rep_usuario";
function lista_usuario($usuario){

echo "<table border=1>";
echo "<tr>";
echo "<td>id</td>"; 
echo "<td>nombre</td>";
echo "<td>apellido</td>";
echo "<td>direccion</td>";
echo "<td>email</td>";
echo "<td>username</td>";
echo "<td>password</td>";
echo "<td>telefono</td>";
echo "</tr>";

foreach ($usuario as $key => $us) {
echo "<tr>";
echo "<td>".$us->id."</td>"; 
echo "<td>".$us->nombre."</td>"; 
echo "<td>".$us->apellido."</td>"; 
echo "<td>".$us->direccion."</td>"; 
echo "<td>".$us->email."</td>"; 
echo "<td>".$us->username."</td>"; 
echo "<td>".$us->password."</td>"; 
echo "<td>".$us->telefono."</td>"; 
echo "</tr>";
	
}

echo "</table>";
}


function form_searchbyidusuario(){

echo "<form action='filtro_usuario.php' method='post'>";
echo "Id >";
echo "<input type= 'text' id='info' name='info'>"; 
echo "<input type= 'submit'  value='BUSCAR' >"; 
echo "</form>";
	
}

?>