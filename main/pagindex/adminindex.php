<!doctype html>
<html lang="es">
<head>
		<meta charset="UTF-8">
		<link rel='stylesheet' type='text/css' href = "../../lib/styleAdmin.css">
		<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="lib/jquery.js"></script>
		<script type="text/javascript" src="lib/lib.js"></script>
		<title>MixaHarris Adminstrador</title>
</head>

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
	<!--<a href="../../login/logout.php">Logout</a></p>-->

		<div id='navegador'>
			<div id='homeLogo'>MixaHarris Administrador</div>
				<div id='navAdmin'>	
					Hola, <?php echo $admin->administradorNombre;?> 
					<form action='../../login/logout.php' id='blogout'>
						<input id='button' type='submit' value='Logout'>	
					</form> 
					<a class="Bca" href="../../formupdate/view/edit_admin.php" title="Configurar datos personales">conf</a> 
				 </div>
		</div><!--navegador-->
			
		<!--Cuerpo de pagina-->
		<div id='containerAdmin'>
			
			<div id="sidebarAdmin">	
			<center><p>SECCIONES</p></center>			
				<section id='sidebar'>
				<nav>
				<figure class="cuadricula">
					<img src="../../images/btn1.png"  onclick="location.href='../store/store.php?seccion=GElectricas'">
				</figure>

				<figure class="cuadricula">
					<img src="../../images/btn2.png" onclick="location.href='../store/store.php?seccion=Bajos'">
				</figure>

				<figure class="cuadricula">
					<img src="../../images/btn3.png" onclick="location.href='../store/store.php?seccion=GAcusticas'">
				</figure>

				<figure class="cuadricula">
					<img src="../../images/btn4.png" onclick="location.href='../store/store.php?seccion=Baterias'">
				</figure>
				<figure class="cuadricula">
					<img src="../../images/btn5.png" onclick="location.href='../store/store.php?seccion=Teclados'">
				</figure>
				</figure>
				<figure class="cuadricula">
					<img src="../../images/btn6.png" onclick="location.href='../store/store.php?seccion=Viento'">
				</figure>
				<figure class="cuadricula">
					<img src="../../images/btn7.png" onclick="location.href='../store/store.php?seccion=Audio'">
				</figure>
				</nav>
				</section>
			</div>	
				
					<div id='menuAdmin'>
						<center><h2>MixaHarris</h2></center>
						</br></br>
							<p class='hdm'>Menú de configuracion de MixaHarris</p>
<pre class='preAd'>

<p class='hdm'>Personal:</p>
<ul class='liad'>
	<li><a href='../../login/pass/cambiar_pass.php'>Cambiar mi contraseña</a></li>
</ul>	
<p class='hdm'>Usuarios:</p>
<ul class='liad'>
	<li><a href='../../reportes/action/cliente.php'>Ver informacion de  usuarios</a></li>
	<li><a href='../../formulario/view/alta_clientes.php'>Agregar Usuario</a></li>
	
</ul>
<p class='hdm'>Productos:</p>
<ul class='liad'>
	<li><a href='../../reportes/action/producto.php'>Ver productos</a></li>
	<li><a href='../../formulario/view/alta_productos.php'>Agregar producto</a></li>

</ul>
<p class='hdm'>Proveedores:</p>
<ul class='liad'>
	<li><a href='../../reportes/action/proveedor.php'>Ver proveedores</a></li>
	<li><a href='../../formulario/view/alta_proveedores.php'>Agregar proveedor</a></li>
</ul>
</pre>


						
					</div>
				
		
		
		
		
		
		</div>
		
</body>
</html>

