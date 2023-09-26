<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/stylereg.css">
    <link rel="icon" type="image/png" href="css/logo.png"/>
	
</head>  
<body>
   <?php require 'partials/header.php'?>

	<?php
		//Accedemos a la cookie con  $_COOKIE y el nombre de la cookie
		@$contenido = $_COOKIE["user"]; //$contenido vale lo que contenga la cookie
		@$contenido1 = $_COOKIE["nombre"]; //$contenido vale lo que contenga la cookie
		@$contenido2 = $_COOKIE["nombre1"]; //$contenido vale lo que contenga la cookie
		@$contenido3 = $_COOKIE["apellido"]; //$contenido vale lo que contenga la cookie
		@$contenido4 = $_COOKIE["apellido1"]; //$contenido vale lo que contenga la cookie
		@$contenido5 = $_COOKIE["tipo"];
		@$contenido6 = $_COOKIE["email"];
		
		setcookie("user",$contenido,time() - 10);
		setcookie("nombre",$contenido1,time() - 10);
		setcookie("nombre1",$contenido2,time() - 10);
		setcookie("apellido",$contenido3,time() - 10);
		setcookie("apellido1",$contenido4,time() - 10);
		setcookie("tipo",$contenido5,time() - 10);
		setcookie("email",$contenido6,time() - 10);
	?>
    <form action="php/login.php" method="post" class="formulario">
    
    <h1>Login</h1>
    
     <div class="contenedor">
        
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input style="background-color:white;" type="text" name="email" placeholder="Ingresar email">
         </div>
         
         <div class="input-contenedor">
            <i class="fa fa-key icon"></i>
            <input style="background-color:white;" type="password" name="password" id="password" placeholder="Ingresar contraseña">
                <a class="btn" onclick="mostrarContrasena()">
                <i class="fa fa-eye icon" ></i></a>
         
         </div>
         <input type="submit" value="Log in" class="button" name="btn1">
         <p style="background-color:white; color:black">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p style="background-color:white; color:black">¿No tienes una cuenta? <a class="link" href="registro.php">Registrate </a></p>
     </div>
    </form>
    <script>
        function mostrarContrasena(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
      </script>

</body>
</html>