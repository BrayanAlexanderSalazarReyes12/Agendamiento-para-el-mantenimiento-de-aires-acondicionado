<?php
	$servername = "localhost";
	$username = "sistema_de_mantenimiento";
	$password = "sistemademantenimiento";
	$dbname = "sistema_de_mantenimiento";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	//Accedemos a la cookie con  $_COOKIE y el nombre de la cookie

	@$contenido1 = $_COOKIE["apellido1"]; //$contenido vale lo que contenga la cookie
	$nuevo_nombre=$_POST["segundo_apellido"];
	
	$sql="UPDATE `datos` SET `apellido1` = '$nuevo_nombre' WHERE `apellido1` = '$contenido1'";
	
	if ($conn->query($sql) === TRUE) {
		setcookie("apellido1", $contenido1, time() - 10);
		setcookie("apellido1",$nuevo_nombre,time() + 86400,"/isi");
		echo'<script type="text/javascript">	
			window.location.href="http://localhost/isi/perfil.php";
		</script>';
	}else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>