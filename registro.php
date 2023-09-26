<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title>Registro</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<!--comienso css-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/stylereg.css">
	<link rel="icon" type="image/png" href="css/logo.png"/>
	<link href="css/tipo.css" rel="stylesheet" />

	<!--final css -->
</head> 
<body>
    <?php require 'partials/header.php'  ?>

 <form action="php/registro.php" method="post" class="formulario">
    
    <h1>Regístrate</h1>
    

     <div class="contenedor">
     
			 
		<div class="input-contenedor">
          <i class="fas fa-id-badge icon"></i>
          <input type="text" style="background-color:white;" class="form-control" placeholder="Primer nombre" name="primernombre" required>
        </div>
		 <div class="input-contenedor">
          <i class="fas fa-id-badge icon"></i>
          <input type="text" style="background-color:white;" class="form-control" placeholder="Segundo nombre" name="segundonombre" required>
        </div>
		<div class="input-contenedor">
          <i class="fas fa-id-badge icon"></i>
          <input type="text" style="background-color:white;" class="form-control" placeholder="Primer apellido" name="primerapellido" required>
        </div>
		 <div class="input-contenedor">
          <i class="fas fa-id-badge icon"></i></span>
          <input type="text" style="background-color:white;" class="form-control" placeholder="Segundo apellido" name="segundoapellido" required>
        </div>
        <div class="input-contenedor">
          <i class="fas fa-user icon"></i>
          <input type="text" style="background-color:white;" class="form-control" placeholder="nombre de usuario" name="nombredeusuario" required>
		</div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="email" style="background-color:white;" class="form-control" name="email" placeholder="Correo Electronico" required>
         </div>
         
        <div class="input-contenedor">
        <i class="fa fa-key icon"></i>
        <input type="password" style="background-color:white;" class="form-control" name="password" id="password" placeholder="Ingresar contraseña" required>
            <a class="btn" onclick="mostrarContrasena()">
            <i class="fa fa-eye icon" ></i></a>
        </div>

        <div class="input-contenedor">
        <i class="fa fa-key icon"></i>
        <input type="password" style="background-color:white;" class="form-control" name="confirm_password" id="confirm_password" placeholder="Repetir contraseña" required>
            <a class="btn" onclick="mostrarContrasena2()">
            <i class="fa fa-eye icon" ></i></a>
        </div>
		<div class="input-contenedor">
			<select class="tipo" id="tipo" value="" name="tipo" required>
				<option selected value=""disabled selected> Elige una opción </option>
				<option value="cliente">Cliente</option> 
				<option value="tecnico">Tecnico</option> 
			</select>
         </div>
		 <button class="button" type="submit">Regístrate</button>
         <p style="background-color:white; color:black">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p style="background-color:white; color:black">¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesion</a></p>
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
      <script>
      	function mostrarContrasena2(){
            var tipo = document.getElementById("confirm_password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
      </script>


</body>
</html>
