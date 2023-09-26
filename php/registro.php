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

	@$nombre=$_POST["primernombre"];
	@$nombre1=$_POST["segundonombre"];
	@$apellido=$_POST["primerapellido"];
	@$apellido1=$_POST["segundoapellido"];
	@$nombredeusuario=$_POST["nombredeusuario"];
	@$email=$_POST['email'];
	@$contrasena=$_POST["password"];
	@$contrasena1=$_POST["confirm_password"];
	@$tipo=$_POST["tipo"];
	@$imagen=addslashes(file_get_contents('http://localhost/isi/imagen/78-786420_icono-usuario-joven-transparent-user-png-png-download.png' ));

	if($tipo=="cliente")
	{	
		if($contrasena==$contrasena1){
			
			setcookie("nombre",$nombre,time() + 86400,"/isi");
			setcookie("nombre1",$nombre1,time() + 86400,"/isi");
			setcookie("apellido",$apellido,time() + 86400,"/isi");
			setcookie("apellido1",$apellido1,time() + 86400,"/isi");
			
			$sql = "INSERT INTO datos (nombre, nombre1, apellido, apellido1, email)
			VALUES ('$nombre', '$nombre1', '$apellido', '$apellido1', '$email')";
			$sql1 = "INSERT INTO personas (nombre, pass, tipo, email)
			VALUES ('$nombredeusuario', '$contrasena', '$tipo', '$email')";
			$sql2 = "INSERT INTO imagen (nombre, imagen)
			VALUES ('$nombre', '$imagen')";
		}
		if ($conn->query($sql) === TRUE) {
			if ($conn->query($sql1) === TRUE) {
				if ($conn->query($sql2) === TRUE) {
				  echo'<script type="text/javascript">
					alert("usuario creado con exito");
					window.location.href="http://localhost/isi/index.php";
					</script>';
				}else{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}else{
		if($contrasena==$contrasena1){
			
			setcookie("nombre",$nombre,time() + 86400,"/isi");
			setcookie("nombre1",$nombre1,time() + 86400,"/isi");
			setcookie("apellido",$apellido,time() + 86400,"/isi");
			setcookie("apellido1",$apellido1,time() + 86400,"/isi");
			
			$sql = "INSERT INTO datos (nombre, nombre1, apellido, apellido1, email)
			VALUES ('$nombre', '$nombre1', '$apellido', '$apellido1', '$email')";
			$sql1 = "INSERT INTO personas (nombre, pass, tipo, email)
			VALUES ('$nombredeusuario', '$contrasena', '$tipo', '$email')";
			$sql2 = "INSERT INTO imagen (nombre, imagen)
			VALUES ('$nombre', '$imagen')";
		}
		if ($conn->query($sql) === TRUE) {
			if ($conn->query($sql1) === TRUE) {
				if ($conn->query($sql2) === TRUE) {
					echo'<script type="text/javascript">
					alert("usuario creado con exito");
					window.location.href="http://localhost/isi/ver_peticiones.php";
					</script>';
				}else{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

$conn->close();

?>