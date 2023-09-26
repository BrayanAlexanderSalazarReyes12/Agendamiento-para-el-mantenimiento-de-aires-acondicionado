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
?>