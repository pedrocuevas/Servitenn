<!DOCTYPE html>
<html lang="es">
	<head>
<meta charset="UTF-8" />
		<title>Generar Informe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<script language="javascript" src="jquery.js"></script>
		<script language="javascript" src="funciones.js"></script>
		<script language="javascript">
		$(document).ready(function(){
		// Parametros para e combo1
   	$("#combo1").change(function () {
   		$("#combo1 option:selected").each(function () {
			//alert($(this).val());
				elegido=$(this).val();
				$.post("combo1.php", { elegido: elegido }, function(data){
				$("#combo2").html(data);
			});			
        });
   })	});
s</script>
</head>

	
	<body>
	<div class="container">
	<?php
	 include("conexion.php");
    session_start();
     if(isset($_SESSION['Rut'])){
     mysql_select_db($db,$con) or die("problemas al conectar db");
	  $registro = mysql_query("SELECT * FROM maquina ") or die ("problemas en consulta:".mysql_error());
	  ?>
	  <div class="codrops-top">
                <a href="user.php">
                    <strong>VOLVER</strong>
                </a>
                <span class="right">
                    <a href="destruir.php">
                    <strong>CERRAR SESIÓN</strong>
                    </a>
                </span>
                <div class="clr"></div>
       </div>	
				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                                <h1>Generacion de Informe</h1>
                        </div>
                </div>  
				</div>
				</div>
				<div id="wrapper_dos">
                        <div id="login" class="animate form">
			 <form action='informe.php' method='post' name='form'>
             <table id="box-table-b">
             <tr>
             <td>Cliente:</td>
             <td><input type="text" name="cliente" required></td>
             </tr>
             <tr>
             <td>Atencion:</td>
             <td><input type="text" name="atencion" required></td>
             </tr>
             <tr>
             <td>Ciudad:</td>
             <td><input type="text" name="ciudad" required></td>
             </tr>
             <tr>
             <td>Ubicacion:</td>
             <td><input type="text" name="ubicacion" required></td>
             </tr>
             <tr>
             <td>Operador:</td>
             <td><input type="text" name="operador" required></td>
             </tr>
             </table>
				 <table align='center' cellpadding='0' cellspacing='0' id="box-table-c">
				 <tr>
				 <td>Equipo</td>
				 <td>N° Serie</td>
				 <td>Horometro</td>
				 <td>Marca</td>
				 <td>Modelo</td>
				 <td>Hora Inicio</td>
				 <td>Hora Termino</td>					 
				 </tr>
				<tr>
				
			    <?php
				echo"<td><select name='maquina'>";
                while($fila=mysql_fetch_array($registro)){
                echo "<option value='".$fila['nombre']."'>".$fila['nombre']."</option>";}
                echo "</select></td>";
				 ?>
				
				 
				 <?php echo "<td><select name='serie'>";
				 echo "<option value=''>";
				 $registro = mysql_query("SELECT * FROM Maquina ") or die ("problemas en consulta:".mysql_error());
				 while($reg1=mysql_fetch_array($registro)) {
				 echo "<option value='".$reg1['serie']."'>".$reg1['serie']."";}
				 ?></select></td>
				 <td><input type="number" name="horometro" required></td>
				 <?php echo "<td><select name='marca'>";
				 echo "<option value=''>";
				 $registro = mysql_query("SELECT * FROM Maquina ") or die ("problemas en consulta:".mysql_error());
				 while($reg1=mysql_fetch_array($registro)) {
				 echo "<option value='".$reg1['marca']."'>".$reg1['marca']."";}
				 ?></select></td>
				 <td><select name='modelo'>
				 <option value="">
				 <?php $registro = mysql_query("SELECT * FROM Maquina ") or die ("problemas en consulta:".mysql_error());
				 while($reg1=mysql_fetch_array($registro)) {
				 echo "<option value='".$reg1['modelo']."'>".$reg1['modelo']."";}
				 ?></select></td>
				 <td><input type="time" name="horainicio" placeholder='formato 24 ej: 23:23' required></td>
				 <td><input type="time" name="horatermino" placeholder='mayor que hora inicio' required></td>
				 </tr>
				 </table>
				 <table align='center' cellpadding='0' cellspacing='0' id="box-table-c">
				 <tr>
				 <td>Diagnostico*:</td>
				 <td><select name='combo1' id='combo1'>
				 	<option value="">
				 	<option value="DIAGNOSTICOS CARGADORES">DIAGNOSTICOS CARGADORES</option>
				 	<option value='DIAGNOSTICO BARREDORAS'>DIAGNOSTICO BARREDORAS</option>
				 	<option value='DIAGNOSTICO CAMIONES ALTOVACIO'>DIAGNOSTICO CAMIONES ALTOVACIO</option>
				 </select></td>
				 </tr>
				 <tr>
				 <td>Mantencion*:</td>
				 <td><select name='combo2' id="combo2" >	
				 </select></td>				 
				 </tr>
				 </table>
				 <table align='center' cellpadding='0' cellspacing='0' id="box-table-c">
				 <tr>
				<td>Servicio*:</td>
				<td><div id="check"><input type="checkbox" name="Cambioaceiteyfiltrodemotor">Cambio aceite y filtro de motor</input><input type="checkbox" name="Aceitepararellenodemotor">Aceite para relleno de motor<br>
				    <input type="checkbox" name="Cambiofiltrodepetróleo">Cambio filtro de petróleo</input><input type="checkbox" name="Cambiofiltroracor">Cambio filtro racor<br>
				    <input type="checkbox" name="Cambiofiltrodecantador">Cambio filtro decantador</input><input type="checkbox" name="Cambiofiltrolinea">Cambio filtro linea<br>
				    <input type="checkbox" name="Cambiodefiltrosdeaire">Cambio de filtros de aire</input><input type="checkbox" name="Aceitepararellenodemotor">Aceite para relleno de motor<br>
				    </div></td>				 
            </tr>
            <tr>
            <td>Pendientes</td>
            <td><textarea name="pendiente"></textarea></td>
            </tr>
				</table>
				<table align='center' cellpadding='0' cellspacing='0' id="box-table-c">
				<tr>
				<td>Descripcion</td>
				<td>N/Parte</td>				
				<td>Unit</td>
				<td>Cantidad</td>
				<td>Total</td>
				</tr>
				<tr>
				<td><select name='descripcion' id='descripcion' onchange="muestra_valor(this);">
				 <option value="">
				 <?php $registro = mysql_query("SELECT * FROM Repuesto ") or die ("problemas en consulta:".mysql_error());
				 while($reg1=mysql_fetch_array($registro)) {
				 echo "<option value='".$reg1['nombre']."' >".$reg1['nombre']."";
				}?>
				 </select></td>
				 
				 <td><div id="N/Parte" >	
				</div></td>
				<td><div id="area"></div></td>
				<td><input id="cantidad" type='number' name='cantidad'  onChange='preciototal(this)'></td>
				<td><div id="total" name="total"></div></td>	
            </tr>
            <tr>
			
            <td><select name='descripcion1' id='descripcion1' onchange="muestra_valor(this);">
				 <option value="">
				 <?php $registro2 = mysql_query("SELECT * FROM repuesto ") or die ("problemas en consulta:".mysql_error());
				 while($reg2=mysql_fetch_array($registro2)) {
				 echo "<option value='".$reg2['nombre']."' >".$reg2['nombre']."";
				}?>
		   </select></td>
		   
				 <td><div id="N/Parte1" >	
				</div></td>
				<td><div id="area1"></div></td>
				<td><input id="cantidad1" type='number' name='cantidad1'  onChange='preciototal1(this)'></td>
				<td><div id="total1" name="total1"></div></td>	
            </tr>
            <tr>
				<td></td>
				<td></td>
				<td><strong>TOTAL</strong></td>
				<td></td>
				<td><div id="grantotal"></div></td>
            </tr>
            </table>
            <br>
				 <td><input type='submit' value='generar' /></td>
                  <td><input type='submit' value='volver' /></td>
				 </form>
				 </div>
				 </div>
			<section>
					<article>
						<hgroup>
                  </hgroup>
               </article>
			</section>
			
			<?php }else {
		echo "No puedes ver esta página, regístrate e inicia sesión";
		}?>
				
		
	</body>
	
</html>
<?php 

?>