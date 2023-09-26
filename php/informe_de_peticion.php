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
	@$contenido1 = $_COOKIE["nombre"]; //$contenido vale lo que contenga la cookie
    @$contenido2 = $_COOKIE["nombre1"]; //$contenido vale lo que contenga la cookie
    @$contenido3 = $_COOKIE["apellido"]; //$contenido vale lo que contenga la cookie
    @$contenido4 = $_COOKIE["apellido1"];
	
	@$hora=$_POST["tiempo"];
	@$estado=$_POST["estado"];
	/*echo'<script type="text/javascript">
			alert("estado:'.$estado.' hora:'.$hora.' fecha:'.$fecha.'");
	</script>';*/

	$sql="SELECT * from peticiones";
	$rs = $conn->query($sql);
	$tipodeman="";
	$horadeinicio=0;
	while($mostrar = $rs -> fetch_array()){
		if($mostrar['id']==$estado)
		{
			$tipodeman=$mostrar['tipodemantenimiento'];
			$horadeinicio=$mostrar['Hora'];
		}
	}

	if($hora>$horadeinicio)
	{
		$sql="UPDATE peticiones
		SET horafinal= '".$hora."',estadodemantenimiento='mantenimiento finalizado',estadofinal='true'
		WHERE id = '".$estado."'";
		if ($conn->query($sql) === TRUE) {
			echo'<script type="text/javascript">
				window.location.href="http://localhost/isi/informe_de_peticion.php";
			</script>';
		}else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}else{
		echo'<script type="text/javascript">
				alert("la hora final debe ser mayor a la hora de inicio");
				window.location.href="http://localhost/isi/informe_de_peticion.php";
			</script>';
	}
?>