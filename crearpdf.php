<html lang="en" class"no-js"=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--comentario-->
	<meta content="Luis Ceron Martinez" name="author">
	<meta content="programacion sitios web" name="descripción">
	<meta content="programcio de sitios, web" name="keywords">
	<title>Programacion De Sitios WEB</title>
	<link rel="stylesheet" href="./Sitios WEB_files/normalize.css">
	<link rel="stylesheet" href="./Sitios WEB_files/estilo.css">
</head>

<body>
	   <!--script despues de body para agilizar-->
		<script scr="js/modernize.js"></script>
		<script scr="js/prefixfree.min.js"></script>
		<script scr="js/jquery-3.1.0.js"></script>
	
	<div id="contenidos">
		<img src="./fotos/clinica.jpg" alt="unad">	
		<header>
			<h1><a>Clinica Reina Inmaculada- Programacion de Sitios WEB</a></h1>
		</a></header><a>
	    </a><nav><a>
			</a><ul><a>
					<?	require('C:\AppServ\www\fpdf\fpdf.php');
						require('C:\AppServ\www\act5\conexion.php');
						$pdf = new FPDF();
						$pdf->AddPage();
						$pdf->SetFont('Arial','B',16);
						$pdf->Cell(50,10,'Fecha: '.date('d.m.Y.H.i.s').'',0);
						$pdf->Ln(10);
						$pdf->Cell(50,10,'Estudiante: luis alberto ceron m');
						$pdf->Ln(30);
						$pdf->Cell(40,10,'',0);
						$pdf->Cell(100,10,'HOJA DE VIDA EQUIPOS',0);
						$pdf->Ln(10);
						$pdf->SetFont('Arial','B',9);
						$pdf->Cell(20,10,'serial');
						$pdf->Cell(25,10, 'velocidad');
						$pdf->Cell(35,10, 'marca');
						$pdf->Cell(40,10, 'ram');
						$pdf->Cell(45,10, 'disco');
						$pdf->Cell(50,10, 'Fecha');
						$pdf->Cell(58,10, 'Fecha');
						$pdf->Ln(10);
						$pdf->SetFont('Arial','',8);
						include("conexion.php");
						$conec=mysql_connect($s,$u,$p,$bd ) or die ("no se pudo establesercon con serv");
						mysql_select_db($bd,$conec) or die ("no hay conexion con serv");
						$registro=mysql_query("SELECT * FROM festo")or die("problemas en la consulta:".mysql_error());
						while($reg=mysql_fetch_array($registro)) {
						$pdf->Cell(22,10, $reg['serial'], 0);
						$pdf->Cell(20,10, $reg['velocidad'], 0);
						$pdf->Cell(27,10, $reg['marca'], 0);
						$pdf->Cell(20,10, $reg['ram'], 0);
						$pdf->Cell(32,10, $reg['disco duro'], 0);
						$pdf->Cell(20,10, $reg['Fecha'], 0);
						$pdf->Ln(10);
						}
						$pdf->Output();
					?><img src="./fotos/2.jpg" alt="unad">
			</h1></ul>		</nav>
		</div>	</body><a href= "index.html">Menu inicio</a><br>
</html>