<?php
include("conexion.php");

if(isset($_POST['rut']) && !empty($_POST['rut']) ) 
{
	mysql_query("DELETE FROM Usuario WHERE Rut='$_POST[rut]'",$con);
header("Location: admin.php");
}
else {
	header("Location: seleccionaruser.php");
	}
?>			

