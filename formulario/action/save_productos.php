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
<title>MixaHarris - Alta de Productos</title>
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
			<div id='homeLogo'>MixaHarris Administrador - Alta Productos</div>
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

	$producto=array();
	$datosProducto = array("nombre","marca","modelo","descripcion","precio","tipo", "garantia", "proveedor");//se obtiene de los names del formulario
	foreach($datosProducto as $key => $datoProducto){
	$producto[] = $_POST[$datoProducto];
	}
	/*echo"<pre>\n";
		print_r($producto);
	echo"</pre\n>";*/

	/*El primer paso es contruir la instruccion en mysql se construye a partir de los datos del arreglo $cliente[];*/
	$sql = "INSERT INTO mixaharris.productos (idproductos, productosNombre, productosMarca, productosModelo, productosDescripcion, productosPrecio, productosTipo, productosGarantia, proveedor_idproveedor)
	 VALUES (NULL, '$producto[0]', '$producto[1]', '$producto[2]', '$producto[3]', '$producto[4]', '$producto[5]', '$producto[6]','$producto[7]' );";
	//echo "<p>".$sql."</p>";
	$result= mysql_query($sql);
	if ($result >0){
		echo "Se ha ingresado la informacion exitosamente";
	}
	else {
		echo  "Existe una inconsistencia en informacion";
	}
	?>
	</br></br></br>
	<a id='aFondo' href='../../reportes/action/producto.php'>Aceptar</a>	
</br></br></br>
	</div></center>
</body>
</hmtl>