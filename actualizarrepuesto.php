<?
include("conexion.php");

if(isset($_POST['codigo']) && !empty($_POST['codigo']) && isset($_POST['descripcion']) && !empty($_POST['descripcion']) && 
isset($_POST['precio']) && !empty($_POST['precio'])) 
{
mysql_query("UPDATE Repuesto SET Codigo='$_POST[codigo]', Descripcion='$_POST[descripcion]', Precio='$_POST[precio]' WHERE Codigo='$_POST[codigo]'",$con);
header("Location: admin.php");

}
else {
	header("Location: seleccionar-repuesto.php");
	}
?>			