<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>ADMINISTRADOR</title>
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
	<?php
    session_start();
     if(isset($_SESSION['Rut'])){?>
     	<div id='container'>
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
			<div id="container_demo" >
                    <div id="wrapper">
					 <div id="login" class="animate form">
					<h1>Administrador</h1>	
					<section>
					<article>
                   
   
     <nav class="codrops-demos"> 
                 <a href="usuario.php">Usuarios</a>
				 <a href="informecodigo.php">Producir Informe</a>
                 <a href="maquinas.php">Maquinas</a>
                 <a href="repuestos.php">Repuestos</a>
                 
     </nav>          
                 
             
				  
                  
               </article>
			</section>
			</div>
		</div>
	</div>
</div
		
	<?php }else {
		echo "No puedes ver esta pagina, registrate e inicia sesion";
		}?>
		</body>	
</html>
