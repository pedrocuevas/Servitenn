<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="estilos.css">
        <div id='textPr'>
	</head>
	<body>
	<?php
    session_start();
     if(isset($_SESSION['Rut'])){?>
     	<div id='contenido'>
			<header>
				<hgroup>
					<h1>Máquinas</h1>
                    <br><br><br>	
                     			
                    <a href="agregar-maquina.php" style="margin-left: 200px"><font size="2">Agregar</a></li>
                    <a href="seleccionar-maquina.php"><font size="2">Modificar</a></li>
						  <a href="eliminar-maquina.php"><font size="2">Eliminar</a></li>
                          <a href="todasmaquinas.php"><font size="2">Mostrar Máquina</a></li>
						  <a href="admin.php"><font size="2">volver</a>
                         
                          </hgroup>
			</header>
			</div>
                         	
		
	<?php }else {
		echo "No puedes ver esta página, registrate e inicia sesion";
		}?>
		</body>	
</html>