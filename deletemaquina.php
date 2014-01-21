<?php
include("conexion.php");

if(isset($_POST['serie']) && !empty($_POST['serie']) ) 
{
	mysql_query("DELETE FROM Maquina WHERE Serie='$_POST[serie]'",$con);
header("Location: admin.php");
}
else {
	header("Location: eliminar-maquina.php");
	}
?>			
