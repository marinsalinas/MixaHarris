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
	//echo "<br>";
	//print_r($privilegio);
?>

<table id='changePassword'>
	<form name='altasProveedor' action="validpass.php" method='post' accept-charset='utf-8'>
		<input type='hidden' name='id' value=<?php echo "'".$id."'" ?>/>
		<tr><td>Contraseña Actual:</td><td><input type='password' name='actual'/></td></tr>
		<tr><td>Nueva Contraseña:</td><td><input type='password' name='nuevo'/></td></tr>
		<tr><td colspan='2'></br><center><input id='button' type='submit'value='Aceptar'/></center></td></tr>
	</form>
</table>