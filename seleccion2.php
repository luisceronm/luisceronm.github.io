<?

require ('C:\AppServ\www\fpdf\fpdf.php');
$h = "localhost";
$u = "root";
$p= "14091971";
$db = "solicitudes";

$pdf = new FPDF();
$pdf -> Addpage();
$pdf -> SetFont('Arial', 'B', 16);
$pdf ->Cell(50,10, 'Fecha: '.date('d.m.H.i.s').'',0);
$pdf ->Ln(10);
$pdf ->Cell(50,10, 'PROGRAMACION DE SITIOS WEB');
$pdf -> Ln(10);
$pdf ->Cell(50,10, 'Luis Ceron Martinez');
$pdf ->Ln(30);

$pdf ->Cell(40,10, '', 0);
$pdf ->Cell(100,10, 'REGISTRO DE COMPUTADORES',0);
$pdf ->Ln(10);
$pdf ->SetFont('Arial', 'B', 8);
$pdf ->Cell(25,10, 'id');
$pdf ->Cell(25,10, 'inventario');
$pdf ->Cell(25,10, 'nombre_solicitud');
$pdf ->Cell(30,10, 'foto_equipo');
$pdf ->Cell(25,10, 'nombre_lider_dependencia');
$pdf ->Cell(25,10, 'cargo');
$pdf -> Ln(10);


$pdf -> SetFont('Arial', '', 8);

$conec=mysql_connect($h,$u,$p)
or die ("no se pudo establecer la conexion con el servidor");

mysql_select_d