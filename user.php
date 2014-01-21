<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<title>Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <link rel="stylesheet" href="estilos.css">
	</head>

                         	
		
	<body>
	<?php
    session_start();
     if(isset($_SESSION['Rut'])){?>
        <div class="container">
            <div class="codrops-top">
                <a href="index.html">
                    <strong> PÁGINA PRINCIPAL</strong>
                </a>
                <span class="right">
                    <a href="destruir.php">
                    <strong>CERRAR SESIÓN</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div>			
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                                <a href="informecodigo.php"><h1>Producir Informe</h1></a>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
	<?php }else {
	echo "No puedes ver esta página, registrate e inicia sesion";
	}?>
  <footer>
<!--  <p><img src="servitenn.jpg" width="296" height="113">
  </p>-->
  <h3>Proyecto Universidad Tecnológica Metropolitana </h3>
  <p>Departamento de Informática - Taller Sistemas de Información   </p>
</footer>

    </body>			
</html>