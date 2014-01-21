<?
include("conexion.php");

if(isset($_POST['serie']) && !empty($_POST['serie']) && isset($_POST['equipo']) && !empty($_POST['equipo']) && 
isset($_POST['motor']) && !empty($_POST['motor']) && isset($_POST['marca']) && !empty($_POST['marca']) && 
isset($_POST['modelo']) && !empty($_POST['modelo'])) 
{
	mysql_query("UPDATE Maquina SET Serie='$_POST[serie]', Equipo='$_POST[equipo]', Motor='$_POST[motor]', Marca='$_POST[marca]', Modelo='$_POST[modelo]' WHERE Serie LIKE '$_POST[serie]'",$con);
header("Location: admin.php");

}
else {
	header("Location: seleccionar-maquina.php");
	}
?>			