<?php
include("conexion.php");

if(isset($_POST['rut']) && !empty($_POST['rut']) && isset($_POST['nombre']) && !empty($_POST['nombre']) && 
isset($_POST['paterno']) && !empty($_POST['paterno']) && isset($_POST['materno']) && !empty($_POST['materno']) ) 
{
	mysql_query("UPDATE Usuario SET telefono='$_POST[telefono]', celular='$_POST[celular]',Email='$_POST[Email]' WHERE Rut='$_POST[rut]'",$con);
header("Location: admin.php");
}
else {
	header("Location: seleccionuser.php");
	}
?>			