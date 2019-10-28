<?php
include "services/connection.php";
$user = $_REQUEST['user'];
$pass = $_REQUEST['password'];
$encript = md5($pass);
echo $user;
echo $pass;
//Entra si está configurada la variable del formulario del login
if(isset($_REQUEST['user'])){

	$query = "SELECT * FROM usuarios WHERE nombre='$user' AND password_usuario='$encript'";
	echo $query;
	$result = mysqli_query($conn,$query);
	//La variable $result debería de tener como mínimo un registro coincidente
	if(!empty($result) && mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);
		echo "entro en el primer if";
		//Creo una nueva sesión y defino $_SESSION['nombre']
		session_start();
		$_SESSION['nombre']=$user;
		//Voy a mi sitio personal
		header("Location: services/index1.php");
	}else{
		//Ha fallado la autenticación vuelvo a index.php
		header("Location: index.php?error=1&us=".$user);
	}
//Si no está configurada la variable del formulario del login vuelve al index.php
}else{
	header("Location: index.php");
}	
?>