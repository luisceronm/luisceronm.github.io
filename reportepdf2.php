<?

require ('C:\AppServ\www\fpdf\fpdf.php');
$host = "localhost";
$user = "root";
$pw = "12345678";
$db = "computadores";

$pdf = new FPDF();
$pdf -> Addpage();
$pdf -> SetFont('Arial', 'B', 16);
$pdf ->Cell(50,10, 'Fecha: '.date('d.m.H.i.s').'',0);
$pdf ->Ln(10);
$pdf ->Cell(50,10, 'PROGRAMACION DE SITIOS WEB');
$pdf -> Ln(10);
$pdf ->Cell(50,10, 'Francisco Hilarion');
$pdf ->Ln(30);

$pdf ->Cell(40,10, '', 0);
$pdf ->Cell(100,10, 'REGISTRO DE COMPUTADORES',0);
$pdf ->Ln(10);
$pdf ->SetFont('Arial', 'B', 8);
$pdf ->Cell(25,10, 'SERIAL');
$pdf ->Cell(25,10, 'FOTO');
$pdf ->Cell(25,10, 'VEL PROCESADOR');
$pdf ->Cell(30,10, 'MARCA');
$pdf ->Cell(25,10, 'CAP_RAM');
$pdf ->Cell(25,10, 'CAP_DISCO_DURO');
$pdf -> Ln(10);


$pdf -> SetFont('Arial', '', 8);

$conec=mysql_connect($host,$user,$pw)
or die ("no se pudo establecer la conexion con el servidor");

mysql_select_db($db,$conec)
or die ("no se pudo conectar a la base de datos establecida");

$registro=mysql_query("SELECT * FROM reg_computadores")
or die("problemas en la consulta:".mysql_error());

while($reg=mysql_fetch_array($registro)) {

$pdf -> Cell(25,10, $reg['Serial_Producto'], 0);
$pdf -> Cell(25,10, $reg['Foto_Producto'], 0);
$pdf -> Cell(25,10, $reg['Velocidad_Procesador'], 0);
$pdf -> Cell(25,10, $reg['Marca'], 0);
$pdf -> Cell(25,10, $reg['Cap_RAM'], 0);
$pdf -> Cell(25,10, $reg['Cap_Disco_Duro'], 0);

$pdf ->Ln(10);
}

$pdf->Output();

?>