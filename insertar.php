<?php
include("conexion.php");

if(!empty($_POST['rut']) ) 
{

extract($_POST, EXTR_PREFIX_ALL, "pst"); 	
	
mysql_query("INSERT INTO Usuario (Rut,nombre,paterno,materno,telefono,celular,Email,password) VALUES ('$pst_rut','$pst_nombre'
,'$pst_paterno','$pst_materno','$pst_telefono','$pst_celular','$pst_Email','$pst_password')",$con);



header("Location: admin.php");
}
else {

header("Location: agregaruser.php");
	
	}

?>