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
     if(isset($_SESSION['username'])){?>
     	<div id='contenido'>
			<header>
				<hgroup>
					<h1>Agregar Repuesto</h1>				
				</hgroup>
			</header>
			</div>
			<section>
					<article>
						<hgroup>
                  	<h1></h1>
                  </hgroup>
                 <form action="insertar-repuesto.php" method="post" name="form">
                 	<table>
						<tr>
							<td>Codigo*:</td>
							<td><input type="text" name="codigo" placeholder='‬‬Código Repuesto' required/></td>
						</tr>
						<tr>
							<td>Descripcion*:</td>
							<td><input type="text" name="descripcion" placeholder='Escribir Descripción' required/></td>
						</tr>
						<tr>
							<td>Precio-Unitario*:</td>
							<td><input type="number" name="precio" placeholder='Escribir Precio' required/></td>
						</tr>
						<tr>
							<td><input type="submit" value="Insertar datos" /></td>
							<td><a href="admin.php"><font size="2">volver</a></td>
						</tr>
						</table>
						<font size="2"><br>*datos obligatorios</font>    
						<br><br><font size="2">Si están correctos vuelve al inicio</font>                
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