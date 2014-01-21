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
  <?php  include("conexion.php");
    session_start();
    if(isset($_SESSION['Rut'])){
    mysql_select_db($db,$con) or die("Problemas al conectar bd");
    $registro = mysql_query("SELECT * FROM Usuario ") or die ("Problemas en Consulta:".mysql_error());
	?>
    	<div id='container'>
			<div id="container_demo" >
                    <div id="wrapper">
					 <div id="login" class="animate form">
					<h1>Usuarios Registrados</h1>				

			<section>
					<article>
                  <?php
                  echo"<form action='admin.php' method='post' name='form' id='todos'>";
                 	echo"<table border=1 align='center' cellpadding='0' cellspacing='0' id='box-table-a'>";
						echo "<tr>";
						echo	"<td>Rut</td>";
						echo	"<td>Nombre</td>";
						echo	"<td>Paterno</td>";
						echo	"<td>Materno</td>";
						echo "</tr>";
						 while($reg=mysql_fetch_array($registro)) {
						echo "<tr>";
						echo "<td>".$reg['Rut']."</td>";
						echo "<td>".$reg['nombre']."</td>";
						echo "<td>".$reg['paterno']."</td>";
						echo "<td>".$reg['materno']."</td>";
						echo "</tr>";
					   }
					   echo "</table>";
                  echo "<p class='login button'><input type='submit' value='volver' /></p>";					   
					   echo "</form>";?>
                </article>
				
			</section>
		</div>
	 </div>
<  /div>
</div>	
		
	<?php }else {
		echo "no puedes ver esta pagina, registrate e inicia secion";
		}?>
		</body>	
</html>