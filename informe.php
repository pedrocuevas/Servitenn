<?php
	 include("conexion.php");
	 $de= $_POST['descripcion'];
	 $registro = mysql_query("SELECT * FROM Repuesto Where nombre LIKE '$de' ") or die ("problemas en consulta:".mysql_error());
require('fpdf/fpdf.php');
if($_POST['Cambioaceiteyfiltrodemotor']) {$servicio1="Cambio aceite y filtro de motor";}else {$servicio1="";}
if($_POST['Aceitepararellenodemotor']){$servicio4="";}else {$servicio4="Aceite para relleno de motor";}
if($_POST['Cambiofiltroracor']){$servicio2="Cambio filtro racor";}else {$servicio2="";}
if($_POST['Cambiofiltrodecantador']){$servicio3="Cambio filtro decantador";}else {$servicio3="";}
if($_POST['Cambiofiltrodepetróleo']){$servicio5="Cambio filtro de petróleo";}else {$servicio5="";}
if($_POST['Cambiofiltrolinea']){$servicio6="Cambio filtro linea";}else {$servicio6="";}
if($_POST['Cambiodefiltrosdeaire']){$servicio7="Cambio de filtros de aire";}else {$servicio7="";}
if($_POST['Aceitepararellenodemotor']){$servicio8="Aceite para relleno de motor";}else {$servicio8="";}

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('servitenn_logo.jpeg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    // Título
    $this->Cell(0,10,utf8_decode('Informe de Servicio Técnico'),0,0,'C');
    $this->Ln(20);    // Salto de línea
    $this->SetFont('Arial','B',12);
    $this->Cell(80,6,utf8_decode('Mantención y Reparación'),0,1,'C');
    $this->Cell(80,6,utf8_decode('de máquinas industriales a terreno.'),0,0,'C');
    $this->Cell(0,6,utf8_decode('Día // Mes // Año // Hora'),0,0,'R');
    $this->Ln(6);    // Salto de línea
    $this->Cell(80,6,utf8_decode('Departamento Técnico Río Loa.'),0,0,'C');
    $this->Cell(0,10,date('d/m/Y H:i:s'),0,1,'R');
    $this->Cell(0,5,utf8_decode('Folio: '),0,0,'R'); /*Código del informe. Como está identado hacia la derecha,('R') no debería haber problemas con el largo del código del informe*/ 
    $this->Ln(4);    // Salto de línea
    //$this->Image('engineer.png',115,20,33); //Esto se puede cambiar.
    $this->Ln(2);
 
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-20);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->Cell(0,6,'Ignacio Echeverria #8053 - Fonos: (02)24166219 / (09)96998710  La Cisterna - Santiago',0,0,'C');
    $this->Ln(3);
    $this->Cell(0,6,'E-mail: clubilla@hotmail.com',0,0,'C');
    $this->Cell(0,6,'Page '.$this->PageNo().'/{nb}',0,0,'C'); /* Número de página*/
    $this->Ln(2);
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetLeftMargin(10);
$pdf->SetFont('Arial','',9);

$pdf->Cell(0,6,utf8_decode('Cliente: '.$_POST['cliente']),1,1,'L');
$pdf->Cell(0,6,utf8_decode('Atención: '.$_POST['atencion']),1,1,'L'); // Nombre estático y sin relación con la bdd. Debe ser llenado por el usuario.
$pdf->Cell(0,6,utf8_decode('Ciudad: '.$_POST['ciudad']),1,1,'L'); // Nombre estático y sin relación con la bdd. Debe ser llenado por el usuario.
$pdf->Cell(0,6,utf8_decode('Ubicacion: '.$_POST['ubicacion']),1,1,'L');
$pdf->Cell(0,6,utf8_decode('Operador: '.$_POST['operador']),1,1,'L'); // Nombre estático y sin relación con la bdd. Debe ser llenado por el usuario.
$pdf->Ln(2);
$pdf->Cell(27,6,utf8_decode('Equipo'),1,0,'C'); // Nombre dinámico y relacinado la bdd. Debe ser llenado por el usuario desde un menú.
$pdf->Cell(27,6,utf8_decode('Nº de Serie'),1,0,'C'); // Nombre dinámico y relacinado la bdd. Debe ser llenado por el usuario desde un menú.
$pdf->Cell(28,6,utf8_decode('Horómetro'),1,0,'C'); // Nombre dinámico y relacinado la bdd. Debe ser llenado por el usuario desde un menú.
$pdf->Cell(27,6,utf8_decode('Marca'),1,0,'C'); // Nombre dinámico y relacinado la bdd. Debe ser llenado por el usuario desde un menú.
$pdf->Cell(27,6,utf8_decode('Modelo'),1,0,'C'); // Nombre dinámico y relacinado la bdd. Debe ser llenado por el usuario desde un menú.
$pdf->Cell(27,6,utf8_decode('Hora Inicio'),1,0,'C'); // Dato estático y sin relación con la bdd.
$pdf->Cell(27,6,utf8_decode('Hora Término'),1,1,'C'); // Dato estático y sin relación con la bdd.
$pdf->Cell(27,6,utf8_decode(' '.$_POST['maquina']),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '.$_POST['serie']),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '.$_POST['horometro']),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '.$_POST['marca']),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '.$_POST['modelo']),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '.$_POST['horainicio']),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '.$_POST['horatermino']),1,1,'C');
$pdf->Ln(2);
$pdf->Cell(0,6,utf8_decode('Diagnóstico: '.$_POST['combo2']),1,1,'L');
$pdf->Multicell(0,10,utf8_decode('Servicio: '.$servicio1.' '.$servicio2.' '.$servicio3.' '.$servicio4.' '.$servicio5.' '.$servicio6.' '.$servicio7.' '.$servicio8),1,'L');
$pdf->Ln(2);
$pdf->Multicell(0,10,utf8_decode('Pendiente: '.$_POST['pendiente']),1,'L');
$pdf->Ln(2);

$pdf->Cell(27,6,utf8_decode('Código'),1,0,'C');
$pdf->Cell(27,6,utf8_decode('Cantidad'),1,0,'C');
$pdf->Cell(81,6,utf8_decode('Descripción'),1,0,'C');
$pdf->Cell(27,6,utf8_decode('Unidad'),1,0,'C');
$pdf->Cell(28,6,utf8_decode('Sub-Total'),1,1,'C');

 while($reg1=mysql_fetch_array($registro)) {
//$pdf->Cell(27,6,utf8_decode(' '.$reg1['codigo']),1,0,'C'); // Todas estas, son celdas vacías estáticas listas para ser llenadas
$pdf->Cell(27,6,utf8_decode(' '.$_POST['cantidad']),1,0,'C'); // por las subconsultas.
$pdf->Cell(81,6,utf8_decode(' '.$_POST['descripcion']),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '.$reg1['precio']),1,0,'C');
$total= $_POST['cantidad']*$reg1['precio'];
$pdf->Cell(28,6,utf8_decode(' '.$total),1,1,'C');
}
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(81,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(27,6,utf8_decode(' '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '),1,1,'C');

$pdf->Cell(135); // Moverse 135 mm hacia la derecha.
$pdf->Cell(27,6,utf8_decode('Total: '),1,0,'C');
$pdf->Cell(28,6,utf8_decode(' '.$total),1,1,'C'); // Acá va el total de los precios por pagar del cliente
$pdf->Ln(5);
$pdf->Cell(95,6,utf8_decode('Firma Cliente: '),1,0,'L');
$pdf->Cell(95,6,utf8_decode('Mecánico:'),1,1,'L');


$pdf->Output();
?>