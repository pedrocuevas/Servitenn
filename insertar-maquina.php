<?php
    include("conexion.php");
    if(isset($_POST['serie']) && !empty($_POST['serie']) && isset($_POST['equipo']) && !empty($_POST['equipo']) && 
	 isset($_POST['marca']) && !empty($_POST['marca']) && isset($_POST['modelo']) && !empty($_POST['modelo'])) 
   {
   
      extract($_POST, EXTR_PREFIX_ALL, "pst"); 
   
	  mysql_query("INSERT INTO Maquina (codigo maquina,nombre,marca,modelo) VALUES ('$pst_serie','$pst_equipo','$pst_marca','$pst_modelo')",$con);
     header("Location: admin.php");
   }
    else {
    header("Location: agregar-maquina.php");
   }

?>

