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
					<h1>Selección Repuesto</h1>
					<p>Ingrese Codigo de Maquina</p>				
				</hgroup>
			</header>
			</div>
			<section>
					<article>
						<hgroup>
                  	<h1></h1>
                  </hgroup>
                 <form action="modificarrepuesto.php" method="post" name="form">
                 	<table>
						<tr>
							<td>N° Serie*:</td>
							<td><input type="text" name="codigo" placeholder='Escribir Codigo' required/></td>
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