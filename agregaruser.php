<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="estilos.css">
		<script src='jquery.js'></script>
        <div id='textPr'>
	</head>
	<body>
	<?php
    session_start();
     if(isset($_SESSION['Rut'])){?>
     	<div id='contenido'>
			<header>
				<hgroup>
					<h1>Agregar Usuario</h1>
					<p>Ingrese sus datos</p>				
				</hgroup>
			</header>
			</div>
			<section>
					<article>
						<hgroup>
                  </hgroup>
                 <form action="insertar.php" method="post" name="form">
                 	<table>
						<tr>
							<td>Rut*:</td>
							<td><input type="number" name="rut" placeholder='‬‬Rut sin punto' required/></td>
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
							<td><input type="number" name="telefono" placeholder='Escribir Fono'/></td>
						</tr>
						<tr>
							<td>Celular</td>
							<td><input type="number" name="celular" placeholder='Escribir Celular'/></td>
						</tr>
						<tr>
							<td>Email*</td>
							<td><input type="email" name="Email" placeholder='Escribir Email' required/></td>
						</tr>
						<tr>
							<td>Contraseña*</td>
							<td><input type="password" name="password" placeholder='Escribir contraseña' required/></td>
						</tr>
						<tr>
							<td><input type="submit" value="Insertar datos" /></td>
							<td><a href="admin.php"><font size="2">volver</a></td>
						</tr>
						</table>
						<font size="2"><br>*datos obligatorios</font>    
						<br><br><font size="2">Si estan correctos vuelve al inicio</font>                
                 </form>
                </article>
				</div>	
			</section>
		</div>
		
	<?php }else {
		echo "No puedes ver esta pagina, registrate e inicia sesion";
		}?>
		</body>	
</html>