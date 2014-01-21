<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<title>Modificar Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<script src='jquery.js'></script>
	</head>
	<body>
	<div class="container">
	<?php
	 include("conexion.php");
    session_start();
    if(isset($_SESSION['Rut'])){
    mysql_select_db($db,$con) or die("problemas al conectar db");
    $registro = mysql_query("SELECT * FROM Usuario WHERE Rut = '$_POST[rut]'") or die ("problemas en consulta:".mysql_error());
    
	if(mysql_num_rows($registro)==0){
    	echo "<script type=\"text/javascript\">alert(\"Rut no se encuentra en la base de datos\");document.location=('./seleccionuser.php')</script>";
    	}
    	else {
    while($reg=mysql_fetch_array($registro)) {
    	?>
		<div class="codrops-top">
                <a href="seleccionuser.php">
                    <strong>VOLVER</strong>
                </a>
                <span class="right">
                    <a href="destruir.php">
                    <strong>CERRAR SESIÓN</strong>
                    </a>
                </span>
                <div class="clr"></div>
       </div>
			<div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                                <h1>Modificar Usuario</h1>
                        </div>
                </div>  
				</div>
				</div>
                  
		  <div id="wrapper_dos">
                        <div id="login" class="animate form">
          <form action='actualizar.php' method='post' name='form'>
            <table id="box-table-a">
                 	 <?php
                 	 echo "<tr>";
						echo	"<td>Rut*:</td>";
							echo "<td><input type='text' name='rut' value='".$reg['Rut']."'required/></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Nombre*:</td>";
							echo "<td><input type='text' name='nombre' value='".utf8_encode($reg['nombre'])."' required/></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Paterno*:</td>";
							echo "<td><input type='text' name='paterno' value='".$reg['paterno']."' required/></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Materno*:</td>";
							echo "<td><input type='text' name='materno' value ='".$reg['materno']."' required/></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Fono:</td>";
							echo "<td><input type='number' name='telefono' value='".$reg['telefono']."' /></td>";
						echo "</tr>";
						echo "<tr>";
						echo	"<td>Celular</td>";
							echo "<td><input type='number' name='celular' value='".$reg['celular']."' /></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Email*</td>";
							echo "<td><input type='email' name='Email' value='".$reg['Email']."' required/></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td><input type='submit' value='insertar datos' /></td>";
						echo "</tr>";}?>
						</table> <br>
				<font size='2'>*datos obligatorios</font>  <br>  
				<br><font size='2'>Si están correctos vuelve al inicio</font>          <br>      
                 </form><?php } ?>
                </div>
				</div>
		
	<?php } else {
		echo "No puedes ver esta pagina, registrate e inicia sesion";
		}?>
		</body>	
</html>