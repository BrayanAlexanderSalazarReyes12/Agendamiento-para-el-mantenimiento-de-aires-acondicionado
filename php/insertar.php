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

	@$contenido1 = $_COOKIE["nombre"]; //$contenido vale lo que contenga la cookie
	@$contenido2 = $_COOKIE["nombre1"]; //$contenido vale lo que contenga la cookie
	@$contenido3 = $_COOKIE["apellido"]; //$contenido vale lo que contenga la cookie
	@$contenido4 = $_COOKIE["apellido1"]; //$contenido vale lo que contenga la cookie
	@$contenido5 = $_COOKIE["email"]; //$contenido vale lo que contenga la cookie
	@$nit=$_POST["nit"];
	@$cedula=$_POST["cedula"];
	@$nombres=$contenido1 ." ".$contenido2;
	@$apellidos=$contenido3 ." ".$contenido4;
	@$correo=$contenido5;
	$ubicacion=$_POST["ubicacion"];
	$direccion=$_POST["direccion"];
	$telefono=$_POST["telefono"];
	@$tipodemantenimiento=$_POST["tipodemantenimiento"];
	$cantidad=$_POST["cantidad"];
	$proximoman="esperando que el tecnico asigne la fecha";
	$estadodeman="esperando aprobacion del tecnico";
	
	
	$cuerpo = '
        <style>body *{
			font-family:Arial,sans-serif !important;
		}
		div,p,a,li,td{
			-webkit-text-size-adjust:none;
		}
		*{
			-webkit-font-smoothing:antialiased;
			-moz-osx-font-smoothing:grayscale;
		}
		td{
			word-break:break-word;
		}
		a{
			word-break:break-word;
			text-decoration:none;
			color:inherit;
		}
		body{
			width:100%;
			height:100%;
			background-color:#ffffff;
			margin:0;
			padding:0;
			-webkit-font-smoothing:antialiased;
		}
		html{
			background-color:#ffffff;
			width:100%;
		}
		body p{
			padding:0 !important;
			margin-top:0 !important;
			margin-right:0 !important;
			margin-bottom:0 !important;
			margin-left:0 !important;
		}
		body img{
			user-drag:none;
			-moz-user-select:none;
			-webkit-user-drag:none;
		}
		body .hover:hover{
			opacity:.85;
			filter:alpha(opacity=85);
		}
		body td img:hover{
			opacity:.85;
			filter:alpha(opacity=85);
		}
		body .underline:hover{
			text-decoration:underline !important;
		}
		body .hoverGreen img{
			opacity:1;
			transition:opacity .4s ease-in-out;
			-moz-transition:opacity .4s ease-in-out;
			-webkit-transition:opacity .4s ease-in-out;
		}
		body .hoverGreen img:hover{
			opacity:.1;
			filter:alpha(opacity=10)transition: opacity .4s ease-in-out;
			-moz-transition:opacity .4s ease-in-out;
			-webkit-transition:opacity .4s ease-in-out;
		}
		body .jump:hover{
			opacity:.75;
			filter:alpha(opacity=75);
			padding-top:10px !important;
		}
		body a.rotator img{
			-webkit-transition:all 1s ease-in-out;
			-moz-transition:all 1s ease-in-out;
			-o-transition:all 1s ease-in-out;
			-ms-transition:all 1s ease-in-out;
		}
		body a.rotator img:hover{
			-webkit-transform:rotate(360deg);
			-moz-transform:rotate(360deg);
			-o-transform:rotate(360deg);
			-ms-transform:rotate(360deg);
		}
		body #logo img{
			width:125px;
			height:auto;
		}
		body .logo125 img{
			width:125px;
			height:auto;
		}
		body #icon12 img{
			width:12px;
			height:auto;
		}
		body .icon75 img{
			width:75px;
			height:auto;
		}
		body .icon24 img{
			width:24px;
			height:auto;
		}
		body .icon36 img{
			width:36px;
			height:auto;
		}
		body .icon40 img{
			width:40px;
			height:auto;
		}
		body .image280 img{
			width:280px;
			height:auto;
		}
		body .image245 img{
			width:245px;
			height:auto;
		}
		body .image200 img{
			width:200px;
			height:auto;
		}
		body .image275 img{
			width:275px;
			height:auto;
		}
		body .image250 img{
			width:250px;
			height:auto;
		}
		body .image230 img{
			width:230px;
			height:auto;
		}
		body .image600 img{
			width:600px;
			height:auto;
		}
		body .image135 img{
			width:135px;
			height:auto;
			-webkit-border-radius:4px;
			-moz-border-radius:4px;
			border-radius:4px;
		}
		body .avatar72 img{
			width:72px;
			height:auto;
			-webkit-border-radius:3px;
			-moz-border-radius:3px;
			border-radius:3px;
		}
		body *{
			font-family:Arial,sans-serif !important;
		}
		div,p,a,li,td{
			-webkit-text-size-adjust:none;
		}
		*{
			-webkit-font-smoothing:antialiased;
			-moz-osx-font-smoothing:grayscale;
		}
		td{
			word-break:break-word;
		}
		a{
			word-break:break-word;
			text-decoration:none;
			color:inherit;
		}
		body{
			width:100%;
			height:100%;
			background-color:#ffffff;
			margin:0;
			padding:0;
			-webkit-font-smoothing:antialiased;
		}
		html{
			background-color:#ffffff;
			width:100%;
		}
		body p{
			padding:0 !important;
			margin-top:0 !important;
			margin-right:0 !important;
			margin-bottom:0 !important;
			margin-left:0 !important;
		}
		body img{
			user-drag:none;
			-moz-user-select:none;
			-webkit-user-drag:none;
		}
		body .hover:hover{
			opacity:.85;
			filter:alpha(opacity=85);
		}
		body td img:hover{
			opacity:.85;
			filter:alpha(opacity=85);
		}
		body .underline:hover{
			text-decoration:underline !important;
		}
		body .hoverGreen img{
			opacity:1;
			transition:opacity .4s ease-in-out;
			-moz-transition:opacity .4s ease-in-out;
			-webkit-transition:opacity .4s ease-in-out;
		}
		body .hoverGreen img:hover{
			opacity:.1;
			filter:alpha(opacity=10)transition: opacity .4s ease-in-out;
			-moz-transition:opacity .4s ease-in-out;
			-webkit-transition:opacity .4s ease-in-out;
		}
		body .jump:hover{
			opacity:.75;
			filter:alpha(opacity=75);
			padding-top:10px !important;
		}
		body a.rotator img{
			-webkit-transition:all 1s ease-in-out;
			-moz-transition:all 1s ease-in-out;
			-o-transition:all 1s ease-in-out;
			-ms-transition:all 1s ease-in-out;
		}
		body a.rotator img:hover{
			-webkit-transform:rotate(360deg);
			-moz-transform:rotate(360deg);
			-o-transform:rotate(360deg);
			-ms-transform:rotate(360deg);
		}
		body #logo img{
			width:125px;
			height:auto;
		}
		body .logo125 img{
			width:125px;
			height:auto;
		}
		body #icon12 img{
			width:12px;
			height:auto;
		}
		body .icon75 img{
			width:75px;
			height:auto;
		}
		body .icon24 img{
			width:24px;
			height:auto;
		}
		body .icon36 img{
			width:36px;
			height:auto;
		}
		body .icon40 img{
			width:40px;
			height:auto;
		}
		body .image280 img{
			width:280px;
			height:auto;
		}
		body .image245 img{
			width:245px;
			height:auto;
		}
		body .image200 img{
			width:200px;
			height:auto;
		}
		body .image275 img{
			width:275px;
			height:auto;
		}
		body .image250 img{
			width:250px;
			height:auto;
		}
		body .image230 img{
			width:230px;
			height:auto;
		}
		body .image600 img{
			width:600px;
			height:auto;
		}
		body .image135 img{
			width:135px;
			height:auto;
			-webkit-border-radius:4px;
			-moz-border-radius:4px;
			border-radius:4px;
		}
		body .avatar72 img{
			width:72px;
			height:auto;
			-webkit-border-radius:3px;
			-moz-border-radius:3px;
			border-radius:3px;
		}
		@media only screen and (max-width: 640px){
				body body{
					width:auto !important;
				}
		}	
		@media only screen and (max-width: 640px){
				body table[class=full]{
					width:100% !important;
					clear:both;
				}
		}	
		@media only screen and (max-width: 640px){
				body table[class=mobile]{
					width:100% !important;
					padding-left:20px;
					padding-right:20px;
					clear:both;
				}
		}	
		@media only screen and (max-width: 640px){
				body table[class=fullCenter]{
					width:100% !important;
					text-align:center !important;
					clear:both;
				}
		}	
		@media only screen and (max-width: 640px){
				body td[class=fullCenter]{
					width:100% !important;
					text-align:center !important;
					clear:both;
				}
		}	
		@media only screen and (max-width: 640px){
				body [class=erase]{
					display:none;
				}
		}	
		@media only screen and (max-width: 640px){
				body [class=buttonScale]{
					float:none !important;
					text-align:center !important;
					display:inline-block !important;
					clear:both;
				}
		}	
		@media only screen and (max-width: 640px){
				body .image600 img{
					width:100% !important;
				}
		}	
		@media only screen and (max-width: 640px){
				body td[class=image230]{
					width:230px !important;
					text-align:center !important;
					clear:both;
				}
		}	
		@media only screen and (max-width: 640px){
				body .image298 img{
					width:100% !important;
				}
		}	
		@media only screen and (max-width: 640px){
				table[class=image110]{
					text-align:center;
					float:none;
					width:70% !important;
				}
		}	
		@media only screen and (max-width: 640px){
				body td[class=pad30]{
					padding-left:25px !important;
					padding-right:25px !important;
					text-align:center !important;
					clear:both;
				}
		}	
		@media only screen and (max-width: 640px){
				body td[class=image298] img{
					width:100% !important;
					text-align:center !important;
					clear:both;
				}
		}	
		@media only screen and (max-width: 640px){
				body .h30{
					width:100% !important;
					height:30px !important;
				}
		}	
		@media only screen and (max-width: 640px){
				body .h15{
					width:100% !important;
					height:15px !important;
				}
		}	
		@media only screen and (max-width: 640px){
				body table[class=sponsor]{
					text-align:center;
					float:none;
					width:80% !important;
				}
		}	
		@media only screen and (max-width: 640px){
				body .w10{
					width:8% !important;
					height:10px !important;
				}
		}	
		@media only screen and (max-width: 640px){
				body .pad20{
					padding-left:20px !important;
					padding-right:20px !important;
				}
		}	
		@media only screen and (max-width: 640px){
				body .h65{
					width:100%;
					height:65px !important;
				}
		}</style>
		
		<table class="full" style="background-color: #000000;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center" bgcolor="#000000">
  <tbody>
    <tr>
      <td align="center" valign="top" width="100%">
        <table class="mobile" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
          <tbody>
            <tr>
              <td align="center" width="100%"><!-- Start Nav -->
                <table class="full" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                  <tbody>
                    <tr>
                      <td class="h30" width="100%" height="15">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center" valign="middle" width="100%"><!-- Logo -->
                        <table class="fullCenter" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" width="120" cellspacing="0" cellpadding="0" align="left">
                          <tbody>
                            <tr>
                              <td style="font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-transform: uppercase; font-weight: 600;" width="100%" height="45">Air maintenance</td>
                            </tr>
                            <tr>
                              <td class="h15" style="font-size: 1px; line-height: 1px;" width="100%" height="0">&nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
<!-- Nav -->
		                      </td>
                    </tr>
                    <tr>
                      <td class="h30" width="100%" height="15">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
<!-- End Nav -->
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<table class="full" style="background-color: #000000;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center" bgcolor="#000000">
  <tbody>
    <tr>
      <td style="background-image: url(https://gallery.mailchimp.com/ed526b2f15f645fc575e0db76/images/8aeca826-a9a8-4c1e-892f-b0d5850e3fcc.png); background-size: cover; background-position: center; background-repeat: no-repeat;"><!-- [if gte mso 9]>
            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;">
              <v:fill type="tile" src="images/5a2ddcd490a50untitled-2.png" ></v:fill>
              <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
                <![endif]-->
        <div>
          <table class="mobile" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
            <tbody>
              <tr>
                <td align="center"><!-- Nav Mobile Wrapper -->
                  <table class="full" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                      <tr>
                        <td align="center" width="100%">
                          <table class="full" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                              <tr>
                                <td style="font-size: 1px; line-height: 1px;" width="100%" height="70">&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="fullCenter" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; text-align: center;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                              <tr>
                                <td class="image200" style="text-align: center;" align="center" width="100%">
                                  <table class="fullCenter" style="border-collapse: collapse; height: 155px;" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                      <tr style="height: 155px;">
                                        <td style="text-align: center; height: 155px; width: 418px;" align="center">
                                          <img class="editedImage" src="https://share1.cloudhq-mkt3.net/64803d394dd85d.png" alt="" width="143" height="150" border="0">
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="full" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                              <tr>
                                <td style="font-size: 1px; line-height: 1px;" width="100%" height="40">&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
<!-- Text -->
                          <table class="mobile" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                              <tr>
                                <td class="font32" style="font-size: 46px; color: #ffffff; text-align: center; font-family: Helvetica, Arial, sans-serif; line-height: 56px; font-weight: bold; vertical-align: top;" align="center" width="100%">
                                  <span class="font44" style="color: #ffffff;">En este momento su solicitud de mantenimiento de los equipos de aire acondicionado se encuentra en espera de aprobacion del tecnico</span> 
                                  <br>
                                  <span class="font44" style="color: #ffffff; font-weight: 100;">Equipos para el mantenimiento: '.$cantidad.'</span>.
                                  </br>
								  <br>
                                  <span class="font44" style="color: #ffffff; font-weight: 100;">Tipo de mantenimiento: '.$tipodemantenimiento.'</span>.
                                  </br>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="mobile" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                              <tr>
                                <td style="font-size: 1px; line-height: 1px;" width="100%" height="50">&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
                          
                                </td>
                              </tr>
<!-- End Button Center -->
                             </tbody>
                          </table>
                          <table class="full" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                              <tr>
                                <td width="100%" height="110">&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
<!-- [if gte mso 9.]>
              </v:textbox>
            </v:fill>
          </v:rect>
          <![endif]-->
      </td>
    </tr>
  </tbody>
</table>
<table class="full" style="background-color: #fac32e;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center" bgcolor="#FAC32E">
  <tbody>
    <tr>
      <td align="center" valign="top" width="100%">
        <table class="mobile" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
          <tbody>
            <tr>
              <td class="logo" align="center" width="100%">
                <table class="full" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
                  <tbody>
                    <tr>
                      <td width="100%" height="20">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
                <table class="fullCenter" style="text-align: center;" border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
                  <tbody>
                    <tr>
                      <td class="fullCenter" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: #ffffff; line-height: 26px; font-weight: 400;" width="100%">AIR MAINTENANCE</td>
                    </tr>
                    <tr>
                      <td style="font-size: 1px; line-height: 1px;" width="100%" height="1">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="fullCenter" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: #ffffff; line-height: 26px; font-weight: 400;" width="100%">
                        <a href="http://localhost/isi/principal.php">http://localhost/isi/principal.php</a>
                        <a href="http://localhost/isi/index.php"></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td align="center" width="100%">
                <table class="full" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
                  <tbody>
                    <tr>
                      <td width="100%" height="10">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>

            <tr>
              <td width="100%">
                <table class="full" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
                  <tbody>
                    <tr>
                      <td width="100%" height="20">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<table class="full" style="background-color: #000000;" border="0" width="100%" cellspacing="0" cellpadding="0" align="center" bgcolor="#000000">
  <tbody>
    <tr>
      <td align="center" valign="top" width="100%">
        <table class="mobile" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
          <tbody>
            <tr>
              <td align="center" width="100%">
                <table class="fullCenter" style="text-align: center;" border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
                  <tbody>
                    <tr>
                      <td width="100%" height="25">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="fullCenter" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: #a1a6a7; font-weight: 400;" width="100%">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="100%" height="24">&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="font-size: 1px; line-height: 1px;" width="100%" height="1">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<span id="r_676262_chq_template_marker_in_email_span" style="line-height: 0px; height: 0px; width: 0px;"></span> 
<br>
		';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: servicio de mantenimiento <demantenimientoservicio@gmail.com>\r\n";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: demantenimientoservicio@gmail.com\r\n";

        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        if(mail($correo,'mantenimiento de aire acondicionado',$cuerpo,$headers)){
    		
			$sql="INSERT INTO peticiones (nit, cedula, nombres, apellidos, correo, ubicacion, direccion, telefono, tipodemantenimiento, cantidad, proximomantenimiento, estadodemantenimiento)
				VALUES ('$nit', '$cedula', '$nombres', '$apellidos', '$correo', '$ubicacion', '$direccion', '$telefono', '$tipodemantenimiento', '$cantidad', '$proximoman', '$estadodeman')";
			if ($conn->query($sql) === TRUE) {
				echo'<script type="text/javascript">
					window.location.href="http://localhost/isi/index.php";
				</script>';
			}else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
    	}else{
    		echo "<script>alert('El sitio web esperimenta fallos a la hora de hagendar la cita de mantenimiento');</script>";
    	}
	
	
	
?>