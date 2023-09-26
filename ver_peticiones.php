<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <title>Mostrar Historial de mantenimiento</title>

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
  <link href="css/boton_uno.css" rel="stylesheet">
  <link href="css/calendario.css" rel="stylesheet">
  <link href="css/hora.css" rel="stylesheet">
  <link href="css/boton_dos.css" rel="stylesheet">
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
@$contenido1 = $_COOKIE["tipo"]; //$contenido vale lo que contenga la cookie
@$contenido1 = $_COOKIE["nombre"]; //$contenido vale lo que contenga la cookie
//@$contenido2 = $_COOKIE["nombre1"]; //$contenido vale lo que contenga la cookie
//@$contenido3 = $_COOKIE["apellido"]; //$contenido vale lo que contenga la cookie
//@$contenido4 = $_COOKIE["apellido1"]; //$contenido vale lo que contenga la cookie

	if(empty($contenido))
	{
		echo'<script type="text/javascript">
		window.location.href="http://localhost/isi/login.php";
		</script>';
	}
	if($contenido1=="cliente")
	{
		echo'<script type="text/javascript">
			window.location.href="http://localhost/isi/index.php";
		</script>';
	}
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


  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
    
		<i class="fas fa-stream" onclick="categoria1()" onpaste="return false"></i>
		
      </div>

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

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="ver_peticiones.php">
                          <i class="fas fa-clipboard-list"></i>
                          <span>ver peticiones</span>
                      </a>
          </li>
		  <li>
            <a href="informe_de_peticion.php" class="">
			  <i class="fas fa-book-open"></i>
			  <span>Informes de peticiones</span>
			 
            </a>
            
          </li>
          <li>
            <a href="historial_de_peticiones.php" class="">
			  <i class="fas fa-book"></i>
			  <span>Historial</span>
			 
            </a>
            
          </li>
          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content" class="">
    <section class="wrapper">
		<form id="mantenimiento" action="php/mantenimiento.php" method="post">
		<table border="4" id="myTable">
			<tr>
				<td>Nombres</td>
				<td>Apellidos</td>
				
				<td>Ubicacion</td>
				<td>Direccion</td>
				<td>Telefono</td>
				
				<td>Cantidad</td>
				<td>Estado</td>
			</tr>
			<?php
				$a=0;
				$sql="SELECT * from peticiones";
				$rs = $conn->query($sql);
				$selecion="";
			while($mostrar = $rs -> fetch_array()){
				 $a++;
				 $selecion = $mostrar['selecionada'];
				?>
			<tr>
				
				<td><?php echo $mostrar['nombres']?></td>
				<td><?php echo $mostrar['apellidos']?></td>
				
				<td><?php echo $mostrar['ubicacion']?></td>
				<td><?php echo $mostrar['direccion']?></td>
				<td><?php echo $mostrar['telefono']?></td>
				
				<td><?php echo $mostrar['cantidad']?></td>
				<?php if($selecion == ""){echo'<td><input type="checkbox" value="'.$a.'" name="estado"></input></td>';}else{echo'<script type="text/javascript">
				var firstRow = document.getElementById("myTable").rows['.$a.'];
				firstRow.deleteCell(5);
				firstRow.deleteCell(4);
				firstRow.deleteCell(3);
				firstRow.deleteCell(2);
				firstRow.deleteCell(1);
				firstRow.deleteCell(0);
				</script>';}?>
			</tr>
			<?php
			}
				
			?>
		</table>
		<!--formulario de agendar mantenimiento start -->
		<br>
		</br>
			<input type="date" id="start" name="fecha" value="" class="readonly">
			<input type="time" id="tiempo" name="tiempo" value="">
			<input type="submit" value="Enviar" class="boton" id="boton">
		</form>
		<input class="actualizar" type="button" value="Actualizar" id="actualizar" name="actualizar" onclick="location.reload()"></input>
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