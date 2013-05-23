<?php
session_start();
	//cambie esto y lo puse dentro de la carpeta para evitarnos algunos errores y ademas no reacer codigo
	//como lo de valid
	require_once("../valid.php");
	$user=$_SESSION['usuario'];
	//echo "<pre>";
	//print_r($user);
	//echo "</pre>";
	$id = null;
	foreach ($user as $key => $atrib) {
		$id = $atrib;
		break;
	}

	$priv = null;
	foreach ($user as $key => $atrib) {
		$priv = $atrib;
	}
	//es para poner en nombre en la pagina
	$nombre =(($priv == 1) ? $user->clientesNombre : $user->administradorNombre);
	$href = (($priv == 1) ? "../../main/pagindex/userindex.php" : "../../main/pagindex/adminindex.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name='description' content=''/>
	<meta http-equiv='X-UA-Compatible' content='IE=edge, chrome=1'/>
	<link rel='stylesheet' type='text/css' href = "../../lib/styleUser.css">
	<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../../lib/jquery.js"></script>
	<script type="text/javascript" src="../../lib/lib.js"></script>
	<title>Cambiar Contraseña</title>
</head>
<body>
	<div id='navegador'>
			<div id='homeLogo' onclick="location.href='../../index.html'">MixaHarris Home</div>
			<div id='navAdmin'>	
					Hola, <?php echo $nombre?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href=<?php echo "'".$href."'"; ?> title="Configurar datos personales">conf</a> 
				 </div>
		</div>
	

<center><div id='menuAltaClientes'>
						</br></br>
							<p class='hdm'>Cambiar Contraseña para <?php echo $nombre; ?></p></br></br>
</br></br>
<table id='changePassword'>
	<form name='altasProveedor' action="validpass.php" method='post' accept-charset='utf-8'>
		<input type='hidden' name='id' value=<?php echo "'".$id."'" ?>/>
		<input type='hidden' name='privilegio' value=<?php echo "'".$priv."'" ?>/>
		<tr><td>Contraseña Actual:</td><td><input type='password' name='actual'/></td></tr>
		<tr><td>Nueva Contraseña:</td><td><input type='password' name='nuevo'/></td></tr>
		<tr><td colspan='2'></br><center><input id='button' type='submit'value='Aceptar'/></center></td></tr>
	</form>
</table>	
</br></br>
</div></center><!--Div de menu-->

</body>
</html>




