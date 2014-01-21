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
					<h1>Selección Usuario</h1>
					<p>Ingrese rut de usuario</p>				
				</hgroup>
			</header>
			</div>
			<section>
					<article>
						<hgroup>
                  	<h1></h1>
                  </hgroup>
                 <form action="modificaruser.php" method="post" name="form">
                 	<table>
						<tr>
							<td>Rut*:</td>
							<td><input type="text" name="rut" placeholder='Escribir Rut' required/></td>
						<tr>
							<td><input type="submit" value="Enviar datos" /></td>
							<td><a href="admin.php"><font size="2">volver</a></td>
						</tr>
						</table>
						<br><font size="2">*datos obligatorios</font>    
						<br><font size="2"><br>Si están correctos vuelve al inicio</font>                
                 </form>
                </article>
				</div>	
			</section>
		</div>
		
	<?php }else {
		echo "no puedes ver esta pagina, registrate e inicia secion";
		}?>
		</body>	
</html>