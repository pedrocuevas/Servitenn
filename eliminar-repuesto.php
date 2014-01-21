<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="estilos.css">
		<script src='jquery.js'></script>
        <div id='textPr'>
	</head>
	<body>
		<div id='contenido'>
			<header>
				<hgroup>
					<h1>Eliminar Repuesto</h1>
					<p>Introduzca Codigo del repuesto a eliminar</p>
				</hgroup>
			</header>
			</div>
			<section>
					<article>
					  <hgroup>
                  	
                  </hgroup>
                 <form action="deleterepuesto.php" method="post" name="form">
                 	<table>
						<tr>
							<td height="37">Codigo*:</td>
							<td><input type="number" name="codigo" placeholder='Escribir Codigo' required/></td>
						<tr>
							<td><input type="submit" value="Enviar datos" /></td>
							<td><a href="admin.php"><font size="2">volver</a></td>
						</tr>
				   </table>
						<font size="2"><br>*datos son obligatorios</font>    
						<br><br><font size="2">Si están correctos vuelve al inicio</font>                
                 </form>
                </article>
				</div>	
			</section>
		</div>
	</body>	
</html>