<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MaxaHarris - Login</title>
</head>
<body>
<center>
	<h1>Ingresa tu usuario y contrase&ntilde;a</h1>
	<table>
		<form name='login' action='loginvalidate.php' method='post'/>
		<tr><td>Tipo de Usuario:</td><td><select name='tipoLogin'><option value='1'>Cliente</option><option value='0'>Administrador</option></select></td></tr>
		<tr><td>Usuario:</td><td><input type='text' name='user'></td></tr>
		<tr><td>Contraseña:</td><td><input type='password' name='pass'></td></tr>
		<tr><td><input type='submit' value='Entrar' /></td></tr>
		</form>
	</table>
<div><P>No estas Registrado? <a href="../formulario/view/alta_clientes.php">Hazlo</a></P></div>
</center>
</body>
</html>

