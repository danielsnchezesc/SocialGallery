<!DOCTYPE html>
<html>
<head>
	<title>Formularis</title>
	<link rel="stylesheet" type="text/css" href="./estilo.css">		
</head>
<body>
	<h1>Formularis</h1>	
	<?php
	//1. Conexión con la base de datos	
	include 'connection.php';

	// Creación de la ruta 
	$marca = $_REQUEST['marca'];
	$potencia = $_REQUEST['potencia'];
	$destino = "" . basename($_FILES["imagen"]["name"]);
	
	// ...validaciones pedidas en el projecto...
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], "../".$destino)) {
		$insertImagen = "INSERT INTO vehiculo (marca, potencia, imagen, id_usuario) VALUES ('$marca','$potencia','$destino','1')";
        $conn->query($insertImagen);
        header("Location: index1.php");
    } else {
		echo "<p width='100%' color='black'>Vaya, ha habido un error a la hora de subir el archivo.<br>";
		echo "<a href='../index.php'>Inicio</a>";
    }
	?>
</body>
</html>