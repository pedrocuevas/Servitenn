<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<title>Agregar Usuario</title>
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
                                <h1>Agregar Usuario</h1>
                        </div>
                </div>  
				</div>
				</div>

					<div id="wrapper_dos">
                        <div id="login" class="animate form">
                 <form action="insertar.php" method="post" name="form">
                 	<table id="box-table-a">
						<tr>
							<td>Rut*:</td>
							<td><input type="text" name="rut" placeholder='‬‬Rut sin punto' required/></td>
						</tr>
						<tr>
							<td>Nombre*:</td>
							<td><input type="text" name="nombre" placeholder='Escribir Nombre' required/></td>
						</tr>
						<tr>
							<td>Paterno*:</td>
							<td><input type="text" name="paterno" placeholder='Escribir Apellido Parteno' required/></td>
						</tr>
						<tr>
							<td>Materno*:</td>
							<td><input type="text" name="materno" placeholder='Escribir Apellido Materno' required/></td>
						</tr>
						<tr>
							<td>Fono:</td>
							<td><input type="text" name="telefono" placeholder='Escribir Fono'/></td>
						</tr>
						<tr>
							<td>Celular</td>
							<td><input type="text" name="celular" placeholder='Escribir Celular'/></td>
						</tr>
						<tr>
							<td>Email*</td>
							<td><input type="email" name="Email" placeholder='Escribir Email' required/></td>
						</tr>
						<tr>
							<td>Contraseña*</td>
							<td><input type="password" name="password" placeholder='Escribir contraseña' required/></td>
						</tr>
							<p class="login button"><input type="submit" value="Insertar Datos" /></p>
						</table>
						<font size="2"><br>*datos obligatorios</font>    
						<br><br><font size="2">Si estan correctos vuelve al inicio</font>                
                 </form>
</div>
</div>
		</div>
		
	<?php }else {
		echo "No puedes ver esta pagina, registrate e inicia sesion";
		}?>
		</body>	
</html>