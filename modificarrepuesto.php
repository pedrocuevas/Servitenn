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
	 include("conexion.php");
    session_start();
    if(isset($_SESSION['Rut'])){
    mysql_select_db($db,$con) or die("problemas al conectar db");
    $registro = mysql_query("SELECT * FROM Repuesto WHERE codigo_r LIKE '$_POST[codigo]'") or die ("problemas en consulta:".mysql_error());
    if(mysql_num_rows($registro)==0){
    	echo "<script type=\"text/javascript\">alert(\"El repuesto no se encuentra en la base de datos\");document.location=('./seleccionar-repuesto.php')</script>";
    	}
    	else {
    while($reg=mysql_fetch_array($registro)) {
    	?>
     	<div id='contenido'>
			<header>
				<hgroup>
                  	<h1>Modificar Repuesto</h1>
                  </hgroup>
                  
          <form action='actualizarrepuesto.php' method='post' name='form'>
            <table>
                 	 <?php
                 	 echo "<tr>";
						echo	"<td>Codigo*:</td>";
							echo "<td><input type='number' name='codigo' value='".$reg['codigo_r']."'required/></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Descripcion*:</td>";
							echo "<td><input type='text' name='descripcion' value='".$reg['nombre']."' required/></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Precio*:</td>";
							echo "<td><input type='number' name='precio' value='".$reg['precio']."' required/></td>";
						echo "</tr>";
						
							echo "<td><input type='submit' value='insertar datos' /></td>";
							echo "<td><a href='admin.php' ><font size='2'>volver</a></td>";
						echo "</tr>";}?>
						</table> <br>
				<font size='2'>*datos obligatorios</font>  <br>  
				<br><font size='2'>Si están correctos vuelve al inicio</font>          <br>      
                 </form>
                 <?php }
                 ?>
				</div>		
	<?php } else {
		echo "No puedes ver esta pagina, registrate e inicia sesion";
		} ?>
		</body>	
</html>