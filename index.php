<!DOCTYPE html>
<html>
<head>
	<title>INICIO SESION</title>
	<style type="text/css">
		#formu {
			background-color: white;
			border-color: #0B2736;
			border-radius: 5px;
			width: 300px;
			height: 180px;
			margin: 0 auto;
			margin-top: 15%;
			text-align: center;
		}
		body {
			background: url(fondo.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		h1 {
			font-family: Tahoma, Geneva, sans-serif;
			font-size: 32px;
			letter-spacing: 2px;
			word-spacing: -5px;
			color: black;
			font-weight: 700;
			text-decoration: underline solid rgb(68, 68, 68);
			font-style: normal;
			font-variant: small-caps;
			text-transform: none;
		}
	</style>
	<script type="text/javascript" src="services/codi.js"></script>
</head>
<body>

	<?php
    include "services/connection.php";
	?>

	<div id="formu">
	<h1>Inicia Sesion</h1>

	<form action="login.proc.php" method="POST" name="formulario" enctype="multipart/form-data" onsubmit="return primeravalidacion()">
		<br>

		<!--Campo Nombre-->
		
		<input type="text" name="user" id="name" value="<?php if (isset($_REQUEST['us'])){
			echo $_GET['us'];
			}else{
				echo "";
			} ?>" placeholder="Inserta el usuario..."><br>


		<!--Campo password-->
		<input type="password" placeholder="Inserta el password..." name="password" id="password">
		<br>
		<!--Boton enviar-->		
		<input type="submit" class="btn btn-primary" value="Enviar" >
	</form>
	<?php
	if (isset($_REQUEST['error'])){;
	echo "Usuario o password incorrectos!";
	}
	?>
	</div>
</body>
</html>