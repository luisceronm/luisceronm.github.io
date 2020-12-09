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
$pdf ->SetFont('