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
					<form action='../../login/logout.php' id='blogout'><input id='button' type='submit' value='Logout'></form>
				 </div>
		</div><!--navegador-->
		
		
		
		<!--Cuerpo de pagina-->
		<div id='containerAdmin'>
			
			<div id="sidebarAdmin">	
			<center><p>SECCIONES</p></center>			
				<section id='sidebar'>
				<nav>
				<figure class="cuadricula">
					<img src="../../images/btn1.png">
				</figure>

				<figure class="cuadricula">
					<img src="../../images/btn2.png">
				</figure>

				<figure class="cuadricula">
					<img src="../../images/btn3.png">
				</figure>

				<figure class="cuadricula">
					<img src="../../images/btn4.png">
				</figure>
				<figure class="cuadricula">
					<img src="../../images/btn5.png">
				</figure>
				</figure>
				<figure class="cuadricula">
					<img src="../../images/btn6.png">
				</figure>
				<figure class="cuadricula">
					<img src="../../images/btn7.png">
				</figure>
				</nav>
				</section>
			</div>	
				
					<div id='menuAdmin'>
						<center><h2>Configuración MixaHarris</h2></center>
						<p></br></br></br></br>
							

						</p>
					</div>
				
		
		
		
		
		
		</div>
		
</body>
</html>

