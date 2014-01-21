<?
    include("conexion.php");
    if(isset($_POST['codigo']) && !empty($_POST['codigo']) && isset($_POST['descripcion']) && !empty($_POST['descripcion']) && 
	 isset($_POST['precio']) && !empty($_POST['precio'])) 
   {
	  mysql_query("INSERT INTO  Repuesto  VALUES ('$_POST[codigo]','$_POST[descripcion]','$_POST[precio]')",$con);
     header("Location: admin.php");
   }
    else {
    header("Location: agregar-repuesto.php");
   }

?>
