<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../../lib/jquery.js"></script>
	<script type="text/javascript" src="../../lib/lib.js"></script>
<title>MixaHarris - Alta de Proveedores</title>
<body>

	<?php
	session_start();
	//lo mismo
	//require_once("../../login/valid.php");
	//require_once("../../login/validpriv.php");
	//validAdmin();
	//echo "<h1>MixaHarris - Admin Index Nuevo </h1>";
if (empty($_SESSION['usuario'])){
	echo "<div id='navegador'>
			<div id='homeLogo'>MixaHarris Home</div>
			<div id='login'>	
				<form id='lin' name='LogIN' action='../../login/loginvalidate.php' method='post' accept-charset='utf-8'>
				Entrar como: <select name='tipoLogin' id='tipoLogin'><option value='1'>Cliente</option><option value='0'>Admin</option></select>
				Usuario: <input class='form' type='text' name='user' id='user'>
				Contraseña: <input class='form' type='password' name='pass' id='pass'>
				 <input id='button' type='button' value='Aceptar' onclick='login();'></form>
			</div>
		</div>";
}else{
	
	$admin = $_SESSION['usuario'];
	//print_r($usuario);
	//echo "<div id='navegador'>";
		//echo"<p>"."Bienvenido ".$admin->administradorNombre."<a href='../../login/logout.php'>Logout</a></p>";
	//echo "</div>";
	
	echo "<div id='navegador'>
			<div id='homeLogo'>MixaHarris Administrador - Alta Proveedores</div>
				<div id='navAdmin'>	
					Hola, {$admin->administradorNombre} 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class='Bca' href='../../main/pagindex/adminindex.php' title='Menú administrador'>conf</a> 
				 </div>
		</div><!--navegador-->";
	}
	?>


<center><div id="menuSaveClientes">
		<center><h2>STATUS</h2></center>
	</br></br></br>

		<?php
	//echo "FUNCION ACTIVA";
	header('Content-Type: text/html; charset=UTF-8');
	require_once( '../lib/formularios_lib.php');

	$prov=array();
	$datosProv = array("nombre", "contacto", "tel");//se obtiene de los names del formulario
	foreach($datosProv as $key => $datoProv){
	$prov[] = $_POST[$datoProv];
	}
	//echo"<pre>\n";
		//print_r($prov);
	//echo"</pre\n>";

	/*El primer paso es contruir la instruccion en mysql se construye a partir de los datos del arreglo $cliente[];*/
	$sql = "INSERT INTO mixaharris.proveedor (idproveedor, proveedorNombre, proveedorContacto, proveedorTelefono)
	 VALUES (NULL, '$prov[0]', '$prov[1]', '$prov[2]');";//tuve que cambiar a miinúsculas mixaharris no MixaHarris
	//echo "<p>".$sql."</p>";
	$result= mysql_query($sql);
	if ($result >0){
		echo "Se ha ingresado la informacion exitosamente<br>";

	}
	else {
		echo  "Existe una inconsistencia en informacion<br>";
	}
	?>
	</br></br></br>
	<a id='aFondo' href='../../reportes/action/proveedor.php'>Aceptar</a>	
</br></br></br>
	</div></center>
</body>
</hmtl>