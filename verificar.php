<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="estilos.css">
	   <script src='jquery.js' ></script>
	   
	</head>
	<body><?php
session_start();
include("conexion.php");
$operacion = $_POST['lista'];
switch($operacion) {
	case "admin":
			if(isset($_POST['user']) && !empty($_POST['user']) && 
			isset($_POST['pw']) && !empty($_POST['pw'])) 
			{
			 $sel=mysql_query("SELECT Rut,password FROM Administrador WHERE Rut='$_POST[user]'",$con);
			 $sesion=mysql_fetch_array($sel);
			  if($_POST['pw']==$sesion['password']) {
			  	$_SESSION['Rut']= $_POST['user'];
			  	echo "Sesión Exitosa";
			        header("Location: admin.php");
			  }else {		  	
					  	 echo "<script type=\"text/javascript\">alert(\"No esta registrado vuelva a intentarlo\");document.location=('./index.html')</script>";
			  	}
			}
	break;
	
	case "usuario":
	if(isset($_POST['user']) && !empty($_POST['user']) && 
			isset($_POST['pw']) && !empty($_POST['pw'])) 
			{
			 
			 $sel=mysql_query("SELECT Rut,password FROM Usuario WHERE Rut='$_POST[user]'",$con);
			 $sesion=mysql_fetch_array($sel);
			 
			  if($_POST['pw']==$sesion['password']) {
			  	$_SESSION['Rut']= $_POST['user'];
			  	echo "Sessión Exitosa";
			        header("Location: user.php");
			  }else {
			  	echo "<script type=\"text/javascript\">alert(\"No esta registrado vuelva a intentarlo\");document.location=('./index.html')</script>";
			  	}
			 
			}
			
	break;
}

?></html>
