<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="estilos.css">
		<script src='jquery.js'></script>
        </style>
        <div id='textPr'>
	</head>
	<body>
	<?php
    session_start();
     if(isset($_SESSION['Rut'])){?>
     	<div id='contenido'>
			<header>
				<hgroup>
					<h1>Agregar Máquina</h1>				
				</hgroup>
			</header>
			</div>
			<section>
                  </hgroup>
                 <form action="insertar-maquina.php" method="post" name="form">
                 	<table>
						<tr>
							<td>N° Serie*:</td>
							<td><input type="text" name="serie" placeholder='‬‬Numero de Serie' required/></td>
						</tr>
						<tr>
							<td>Equipo*:</td>
							<td><input type="text" name="equipo" placeholder='Escribir Nombre' required/></td>
						</tr>
						<tr>
							<td>Marca*:</td>
							<td><input type="text" name="marca" placeholder='Escribir Marca' required/></td>
						</tr>
						<tr>
							<td>Modelo*:</td>
							<td><input type="text" name="modelo" placeholder='Escribir Modelo'/></td>
						</tr>
                        
						<tr>
							<td><input type="submit" value="Insertar datos" /></td>
							<td><div align="center"><a href="admin.php"><font size="2">volver</a></div></td>
						</tr>
						</table>
						<font size="2"><br>* datos obligatorios</font>    
						<br><br>
						<font size="2"> Si están correctos vuelve al inicio</font>                
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