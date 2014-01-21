<?php
include("conexion.php");

if(isset($_POST['codigo']) && !empty($_POST['codigo']) ) 
{
	mysql_query("DELETE FROM Repuesto WHERE Codigo='$_POST[codigo]'",$con);
header("Location: admin.php");
}
else {
	header("Location: eliminar-repuesto.php");
	}
?>			
