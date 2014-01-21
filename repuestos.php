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
					<h1>Repuestos</h1>
                    <br><br><br>	
                     			
                    <a href="agregar-repuesto.php" style="margin-left: 200px"><font size="2">Agregar</a></li>
                    <a href="seleccionar-repuesto.php"><font size="2">Modificar</a></li>
						  <a href="eliminar-repuesto.php"><font size="2">Eliminar</a></li>
                          <a href="todosrepuestos.php"><font size="2">Mostrar Repuesto</a></li>
						  <a href="admin.php"><font size="2">volver</a>
                         
                          </hgroup>
			</header>
			</div>
                         	
		
	<?php }else {
		echo "No puedes ver esta página, registrate e inicia sesion";
		}?>
		</body>	
</html>