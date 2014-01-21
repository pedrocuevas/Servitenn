<?php
include("conexion.php");

if(isset($_POST['codigo']) && !empty($_POST['codigo']) && isset($_POST['descripcion']) && !empty($_POST['descripcion']) && 
isset($_POST['precio']) && !empty($_POST['precio'])) 
{
mysql_query("UPDATE Repuesto SET codigo_r='$_POST[codigo]', nombre='$_POST[descripcion]', precio='$_POST[precio]' WHERE codigo_r='$_POST[codigo]'",$con);
header("Location: admin.php");

}
else {
	header("Location: seleccionar-repuesto.php");
	}
?>			