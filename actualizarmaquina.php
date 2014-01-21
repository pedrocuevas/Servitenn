<?php
include("conexion.php");

if(isset($_POST['serie']) && !empty($_POST['serie']) && isset($_POST['nombre']) && !empty($_POST['nombre']) && 
  isset($_POST['marca']) && !empty($_POST['marca']) && isset($_POST['modelo']) && !empty($_POST['modelo'])) 
{
	mysql_query("UPDATE Maquina SET serie='$_POST[serie]', nombre='$_POST[nombre]', marca='$_POST[marca]', modelo='$_POST[modelo]' WHERE serie='$_POST[serie]'",$con);
header("Location: admin.php");

}
else {
	header("Location: seleccionar-maquina.php");
	}
?>			