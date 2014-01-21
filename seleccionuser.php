<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<meta charset='utf-8'>
		<title>Modificar Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<script src='jquery.js'></script>
	</head>
	<body>
			<div class="container">
	<?php
	 include("conexion.php");
    session_start();
     if(isset($_SESSION['Rut'])){
     mysql_select_db($db,$con) or die("problemas al conectar db");
	  $registro = mysql_query("SELECT * FROM maquina ") or die ("problemas en consulta:".mysql_error());
	  ?>
	  <div class="codrops-top">
                <a href="usuario.php">
                    <strong>VOLVER</strong>
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
                                <h1>Modificar Usuario</h1>
                        </div>
                </div>  
				</div>
				</div>

			<div id="wrapper_dos">
                        <div id="login" class="animate form">
                 <form action="modificaruser.php" method="post" name="form">
                 	<table id="box-table-a">
						<tr>
							<td>Rut*:</td>
							<td><input type="text" name="rut" placeholder='Escribir Rut' required/></td>
							<p class="login button"><input type="submit" value="Enviar datos" /></p>
						</table>
						<br><font size="2">*datos obligatorios</font>    
						<br><font size="2"><br>Si están correctos vuelve al inicio</font>                
                 </form>
				 </div>
				 </div>
		
	<?php }else {
		echo "no puedes ver esta pagina, registrate e inicia secion";
		}?>
		</body>	
</html>