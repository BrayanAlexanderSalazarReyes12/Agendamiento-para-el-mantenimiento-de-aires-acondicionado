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
	
	@$nombredeusuario=$_POST["email"];
	@$contrasena=$_POST["password"];

	$sql = "SELECT * FROM `personas` WHERE email='".$nombredeusuario."' AND pass='".$contrasena."'";
	$rs= $conn->query($sql);
	
	
	$nr = $rs->num_rows;

	if($nr == 1){
		while($row = $rs -> fetch_assoc())
		{
			if($row['tipo']=="cliente")
			{
				//Cookie que se destruirá en un dia segundos
				setcookie("user",$row['nombre'],time() + 86400,"/isi");
				setcookie("tipo",$row['tipo'],time() + 86400,"/isi");
				$sql = "SELECT * FROM `datos` WHERE id='".$row["Id"]."'";
				$rs1= $conn->query($sql);
				while($row1 = $rs1 -> fetch_assoc())
				{
					setcookie("nombre",$row1['nombre'],time() + 86400,"/isi");
					setcookie("nombre1",$row1['nombre1'],time() + 86400,"/isi");
					setcookie("apellido",$row1['apellido'],time() + 86400,"/isi");
					setcookie("apellido1",$row1['apellido1'],time() + 86400,"/isi");
					setcookie("email",$row1['email'],time() + 86400,"/isi");
				}

				echo'<script type="text/javascript">
				window.location.href="http://localhost/isi/index.php";
				</script>';
			}else{
				//Cookie que se destruirá en un dia segundos
				setcookie("user",$row['nombre'],time() + 86400,"/isi");
				setcookie("tipo",$row['tipo'],time() + 86400,"/isi");
				$sql = "SELECT * FROM `datos` WHERE id='".$row["Id"]."'";
				$rs1= $conn->query($sql);
				while($row1 = $rs1 -> fetch_assoc())
				{
					setcookie("nombre",$row1['nombre'],time() + 86400,"/isi");
					setcookie("nombre1",$row1['nombre1'],time() + 86400,"/isi");
					setcookie("apellido",$row1['apellido'],time() + 86400,"/isi");
					setcookie("apellido1",$row1['apellido1'],time() + 86400,"/isi");
					setcookie("email",$row1['email'],time() + 86400,"/isi");
				}
				echo'<script type="text/javascript">
				window.location.href="http://localhost/isi/ver_peticiones.php";
				</script>';
			}
		}
		
	}
	else if($nr == 0) {
		echo'<script type="text/javascript">
			alert("Nombre de usuario o contraseña incorrectos");
			window.location.href="http://localhost/isi/login.php";
			</script>';
	}

$conn->close();
?>