<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="estilos.css">
		<script src='jquery.js'></script>
        <div id='textPr'>
	</head>
	<body>
  <?php  include("conexion.php");
    session_start();
    if(isset($_SESSION['Rut'])){
    mysql_select_db($db,$con) or die("Problemas al conectar bd");
    $registro = mysql_query("SELECT * FROM Usuario ") or die ("Problemas en Consulta:".mysql_error());
	?>
    	<div id='contenido'>
			<header>
				<hgroup>
					<h1>Usuarios Registrados</h1>				
				</hgroup>
			</header>
			</div>
			<section>
					<article>
                  <?php
                  echo"<form action='admin.php' method='post' name='form' id='todos'>";
                 	echo"<table border=1 align='center' cellpadding='0' cellspacing='0'>";
						echo "<tr>";
						echo	"<td>Rut</td>";
						echo	"<td>Nombre</td>";
						echo	"<td>Paterno</td>";
						echo	"<td>Materno</td>";
						echo "</tr>";
						 while($reg=mysql_fetch_array($registro)) {
						echo "<tr>";
						echo "<td>".$reg['Rut']."</td>";
						echo "<td>".$reg['nombre']."</td>";
						echo "<td>".$reg['paterno']."</td>";
						echo "<td>".$reg['materno']."</td>";
						echo "</tr>";
					   }
					   echo "</table>";
                  echo "<td><input type='submit' value='volver' /></td>";					   
					   echo "</form>";?>
                </article>
				</div>	
			</section>
		</div>
		
	<?php }else {
		echo "no puedes ver esta pagina, registrate e inicia secion";
		}?>
		</body>	
</html>