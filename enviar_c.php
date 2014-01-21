<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
         
         
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
<?php
include("conexion.php");
if(isset($_POST['rut']) && !empty($_POST['rut']))
{
	mysql_select_db($db,$con) or die("problemas al conectar db");
    $registro = mysql_query("SELECT * FROM Usuario WHERE Rut = '$_POST[rut]'") or die ("problemas en consulta:".mysql_error());
    while($reg=mysql_fetch_array($registro)) {
    	$detino = $reg['Email'];
    	$uder = utf8_encode($reg['nombre']);
    	$pass = $reg['password'];
    	}
    	$mensaje = "Estimado ".$uder." su contraseña es:".$pass.",frente a cualquier duda contáctese con su administrador.";
    	$asunto = "recordatorio contraseña";
		
    	if(mail($detino,$asunto,$mensaje)){
    	echo "<p>Su contraseña ha sido enviada a la dirección de correo:</p>".$detino;
		}
		else
		{
		 echo "Error";
		}
    	//	header("Location: index.html");
}else {
	echo "Problemas al enviar";}   		
?>
                        </div>

						
                    </div>
                </div>  
            </section>
        </div>
		<footer>
<!--  <p><img src="servitenn.jpg" width="296" height="113">
  </p>-->
  <h3>Proyecto Universidad Tecnológica Metropolitana </h3>
  <p>Departamento de Informática - Taller Sistemas de Información   </p>
</footer>
    </body>
</html>