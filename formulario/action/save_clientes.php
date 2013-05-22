<!DOCTYPE html>
<html lang='es'>
<html>
<head>
	<meta charset='utf-8'/>
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="lib/jquery.js"></script>
	<script type="text/javascript" src="lib/lib.js"></script>
	
<title>MixaHarris - Se dio de alta</title>
<body>
		<?php
	session_start();
	//lo mismo
	require_once("../../login/valid.php");
	require_once("../../login/validpriv.php");
	validAdmin();
	//echo "<h1>MixaHarris - Admin Index Nuevo </h1>";
	$admin = $_SESSION['usuario'];
	//print_r($usuario);
	//echo "<div id='navegador'>";
		//echo"<p>"."Bienvenido ".$admin->administradorNombre."<a href='../../login/logout.php'>Logout</a></p>";
	//echo "</div>";
	?>
	<div id='navegador'>
			<div id='homeLogo'>MixaHarris Administrador - Alta Clientes</div>
				<div id='navAdmin'>	
					Hola, <?php echo $admin->administradorNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../../main/pagindex/adminindex.php" title="Menú administrador">conf</a> 
				 </div>
		</div><!--navegador-->


	<center><div id="menuSaveClientes">
		<center><h2>STATUS</h2></center>
	</br></br></br>
	<?php
	//echo "FUNCION ACTIVA";
	header('Content-Type: text/html; charset=UTF-8');
	require_once( '../lib/formularios_lib.php');

	$cliente=array();
	$datosCliente = array("nombre","apellidos", "direccion","CP","email", "tel", "username", "cel", "ocupacion",
	 "sexo");//se obtiene de los names del formulario
	foreach($datosCliente as $key => $datoCliente){
	$cliente[]= $_POST[$datoCliente];
	}
	$cliente[]=$_POST['anio']."-".$_POST['mes']."-".$_POST['dia'];//Concatena para tener el formato "YYYY-mm-dd" para MySQL
	$cliente[]=md5($_POST['pass']);
	echo"<pre>\n";
		/*print_r($cliente);*/
	echo"</pre\n>";

	//El primer paso es contruir la instruccion en mysql se construye a partir de los datos del arreglo $cliente[];
	$sql = "INSERT INTO mixaharris.clientes (idclientes, clientesNombre, clientesApellido, clientesDireccion, clientesCP, clientesEmail, clientesTelefono, clientesUsername, ClientesCelular, clientesOcupacion, clientesSexo, clientesNacimiento, clientesPassword)
	 VALUES (NULL, '$cliente[0]', '$cliente[1]', '$cliente[2]', '$cliente[3]', '$cliente[4]', '$cliente[5]', '$cliente[6]', '$cliente[7]', '$cliente[8]', '$cliente[9]', '$cliente[10]', '$cliente[11]');";
	//echo "<p>".$sql."</p>";
	$result= mysql_query($sql);
	if ($result >0){
		echo "<center><h2>Se ha ingresado la informacion exitosamente</center></h2>";
	}
	else {
		echo  "<center><h2>Existe una inconsistencia en informacion</center></h2>";
	}
	?>
</br></br></br>
	</div></center>
</body>
</hmtl>