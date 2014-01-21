<?
include("conexion.php");
    session_start();
     if(isset($_SESSION['username']))
     {
     	
			mysql_query("INSERT INTO Informe (Folio,Equipo) VALUES ('1','$_POST[equipo]'",$con);
			header("Location: informecodigo.php");
}
?>