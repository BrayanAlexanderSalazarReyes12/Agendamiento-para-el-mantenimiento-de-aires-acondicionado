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
@$contenido = $_COOKIE["user"]; //$contenido vale lo que contenga la cookie
	if($contenido!= '')
	{
		echo'<script type="text/javascript">
		window.location.href="http://localhost/isi/login.php";
		</script>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="css/main.css" />
    <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
    <link rel="icon" type="image/png" href="css/logo.png"/>
    <title>AIR MAINTENANCE</title>
</head>
<body class="is-preload">


    <?php if(!empty($iden)): ?>
      <!-- aqui pones tu programa -->
     
    <?php else: ?>
      <!-- Page Wrapper -->
      <div id="page-wrapper">

        <!-- Wrapper -->
          <div id="wrapper">

            <!-- Panel (Banner) -->
              <section class="panel banner right">
                <div class="content color0 span-3-75">
                  <h1 class="major">Bienvenidos a <br />
                  AIR MINTENANCE</h1>
                  <p>Este es <strong>Air Maintenance</strong>, una manera fácil e inteligente de agendar una cita para el mantenimiento de tu o tus aires acondicionados. Si no tienes una cuenta puedes registrarte <a href="registro.php">aquí</a>,  de lo contrario, si ya tienes una cuenta puedes entrar <a href="login.php">aquí</a>.</p>
                </div>
                <div class="image filtered span-1-75" data-position="25% 25%">
                  <img src="images/logo.png" alt="" />
                </div>
              </section>

            <!-- Panel (Spotlight) -->
              <section class="panel spotlight medium right" id="first">
                <div class="content span-7">
                  <h2 class="major">¿De qué se trata?</h2>
                  <p>Air Maintenance se trata de una opción tecnológica que ayudará a las empresas, hogares, hospitales, universidades y demás entidades a agendar su cita de una forma más rápida y fácil a través de la página web con la empresa encargada de hacer el mantenimiento de aire, para que así, puedan hacer el mantenimiento del equipo lo más pronto posible sin necesidad de llamar al sitio para tener que agendar un mantenimiento.</p>
                </div>
                <div class="image filtered tinted" data-position="top left">
                  <img src="images/pic02.jpg" alt="" />
                </div>
              </section>

            <!-- Panel -->
              <section class="panel color1">
                <div class="intro joined">
                  <h2 class="major">¿Qué esperas?</h2>
                  <p>Es hora de cuidar a tu amigo...<br><strong>!el aire acondicionado!</strong></p>
              </section>
            
            
            <!-- Copyright -->
              <div class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

          </div>

      </div>

    <!-- Scripts -->
      <script src="js/jquery.min.js"></script>
      <script src="js/browser.min.js"></script>
      <script src="js/breakpoints.min.js"></script>
      <script src="js/main.js"></script>
    <?php endif; ?>


</body>
</html>