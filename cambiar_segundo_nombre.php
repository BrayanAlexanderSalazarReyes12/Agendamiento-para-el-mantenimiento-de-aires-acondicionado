<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  
	  <title>Sistema de mantenimiento de aires</title>

	  <!-- Bootstrap CSS -->
	  <link href="css/bootstrap.min.css" rel="stylesheet">
	  <!-- bootstrap theme -->
	  <link href="css/bootstrap-theme.css" rel="stylesheet">
	  <!--external css-->
	  <!-- font icon -->
	  <link href="css/elegant-icons-style.css" rel="stylesheet" />
	  <link href="css/font-awesome.min.css" rel="stylesheet" />




	  <!-- Custom styles -->


	  <link href="css/style.css" rel="stylesheet">
	  <link href="css/select.css" rel="stylesheet">
	  <link href="css/select1.css" rel="stylesheet">
	  <link href="css/nitocedula.css" rel="stylesheet">
	  <link href="css/nombres.css" rel="stylesheet">
	  <link href="css/apellidos.css" rel="stylesheet">
	  <link href="css/correo.css" rel="stylesheet">
	  <link href="css/ubicacion.css" rel="stylesheet">
	  <link href="css/direccion.css" rel="stylesheet">
	  <link href="css/telefono.css" rel="stylesheet">
	  <link href="css/select2.css" rel="stylesheet">
	  <link href="css/equipo.css" rel="stylesheet">
	  <link href="css/boton.css" rel="stylesheet">
	  <link href="css/primer_nombre.css" rel="stylesheet">
	  <link href="css/primer_nombre_text.css" rel="stylesheet">
	  <link href="css/boton_nombre_uno.css" rel="stylesheet">
	  <link href="css/segundo_nombre.css" rel="stylesheet">
	  <link href="css/segundo_nombre_text.css" rel="stylesheet">
	  <link href="css/boton_nombre_dos.css" rel="stylesheet">
	  <link href="css/primer_apellido.css" rel="stylesheet">
	  <link href="css/primer_apellido_text.css" rel="stylesheet">
	  <link href="css/boton_apellido_uno.css" rel="stylesheet">
	  <link href="css/segundo_apellido.css" rel="stylesheet">
	  <link href="css/segundo_apellido_text.css" rel="stylesheet">
	  <link href="css/boton_apellido_dos.css" rel="stylesheet">
	  <link href="css/boton_volver.css" rel="stylesheet">
	  <!--fontawesome-->
	  <script src="https://kit.fontawesome.com/dccfe93a60.js" crossorigin="anonymous"></script>
	  
	  <!-- =======================================================
		Theme Name: NiceAdmin
		Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
		Author: BootstrapMade
		Author URL: https://bootstrapmade.com
	  ======================================================= -->
	</head>
<body>
<!-- terminar-->
<?php
//Accedemos a la cookie con  $_COOKIE y el nombre de la cookie
@$contenido = $_COOKIE["user"]; //$contenido vale lo que contenga la cookie
@$contenido1 = $_COOKIE["nombre"]; //$contenido vale lo que contenga la cookie
@$contenido2 = $_COOKIE["nombre1"]; //$contenido vale lo que contenga la cookie
@$contenido3 = $_COOKIE["apellido"]; //$contenido vale lo que contenga la cookie
@$contenido4 = $_COOKIE["apellido1"]; //$contenido vale lo que contenga la cookie
@$contenido5 = $_COOKIE["tipo"];

/*	$servername = "localhost";
	$username = "sistema_de_mantenimiento";
	$password = "sistemademantenimiento";
	$dbname = "sistema_de_mantenimiento";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
*/
?>


  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      

      <!--logo start-->
	  <a href="index.php" class="logo">Air <span class="lite">Maintenance</span></a>
      <!--<a href="index.php" class="logo"><img src="http://localhost/isi/img/logo.png" width="550" height="50"/></a>-->
      <!--logo end-->

      

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
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
								
								$sql="SELECT * from imagen WHERE `nombre`='$contenido1'";
								$rs = $conn->query($sql);
							while($mostrar = $rs -> fetch_array()){
							?>
                                <img height="30px" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']);?>"/>
                            <?php
								}
							?>
                            </span>
                            <?php echo'<span class="username"> '.$contenido.'</span>' ?>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="perfil.php"><i class="fas fa-id-badge"></i> Mi perfil</a>
              </li>
              
              <li>
			  <?php
                echo '<a href="login.php"><i class="fas fa-power-off"></i> Cerrar sesión</a>';
              ?>
			  </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

	

    <!--main content start-->
    <section id="main-content" class="">
    <section class="wrapper">
		<!--formulario de peticiones start -->
		<form id="peticiones" action="cambiar_primer_nombre.php" method="post" onchange="categoria(this)">
			<?php echo'<p class="primer_nombre_text">Primer nombre: </p> <input type="text" placeholder="Primer_nombre" name="primer_nombre" value="'.$contenido1.'" class="primer_nombre" id="letras" disabled >'?>
			<input type="submit" value="cambiar" class="boton_nombre_uno" id="boton">
		</form>
		<form id="peticiones" action="php/cambiar_segundo_nombre.php" method="post" onchange="categoria(this)">
			<?php echo'<p class="segundo_nombre_text">Segundo nombre: </p> <input type="text" placeholder="segundo_nombre" name="segundo_nombre" value="'.$contenido2.'" class="segundo_nombre" id="letras"  >'?>
			<input type="submit" value="Enviar" class="boton_nombre_dos" id="boton">
		</form>
		<form id="peticiones" action="cambiar_primer_apellido.php" method="post" onchange="categoria(this)">
			<?php echo'<p class="primer_apellido_text">Primer apellido: </p> <input type="text" placeholder="primer_apellido" name="primer_apellido" value="'.$contenido3.'" class="primer_apellido" id="letras" disabled>'?>
			<input type="submit" value="cambiar" class="boton_apellido_uno" id="boton">
		</form>
		<form id="peticiones" action="cambiar_segundo_apellido.php" method="post" onchange="categoria(this)">
			<?php echo'<p class="segundo_apellido_text">Segundo apellido: </p> <input type="text" placeholder="segundo_apellido" name="segundo_apellido" value="'.$contenido4.'" class="segundo_apellido" id="letras" disabled>'?>
			<input type="submit" value="cambiar" class="boton_apellido_dos" id="boton">
		</form>		
		<form id="peticiones" action="index.php" method="post" onchange="categoria(this)">
			<input type="submit" value="volver" class="boton_volver" id="boton">
		</form>
		<!--formulario de peticiones end -->
	</section>
    <!--main content end-->
	</section>
  </section>
  <!--js-->
  <script src="js/tipo.js"></script>
  <script src="js/numeros.js"></script>
  <script src="js/menu-contaible.js"></script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>