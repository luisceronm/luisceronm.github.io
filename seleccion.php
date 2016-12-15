<html lang="en" class"no-js"=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--comentario-->
	<meta content="Luis Ceron Martinez" name="author"><meta content="sitios web" name="descripción">
	<meta content="sitios, web" name="keywords">
	<title>Programacion De Sitios WEB</title>
	<link rel="stylesheet" href="./Sitios WEB_files/normalize.css">
	<link rel="stylesheet" href="./Sitios WEB_files/estilo.css">
</head>
<body>  <script scr="js/modernize.js"></script><!--script despues de body para agilizar-->
		<script scr="js/prefixfree.min.js"></script>
		<script scr="js/jquery-3.1.0.js"></script>
	<div id="contenidos">
		<img src="./fotos/clinica.jpg" alt="unad">	
		<header>
			<h1><a>Clinica Reina Inmaculada- Programacion de Sitios WEB</a></h1><a>
		</a></header><a>
	    </a><nav><a>
			</a><ul><a>
					<h2>LISTA SOLICITUDES</h2>
			<?php	include("conexion.php");
					$conec=mysql_connect($s,$u,$p,$bd)or die("no conecto serv ");
					mysql_select_db($bd, $conec)or die("no conecto base de datos");
					$registro=mysql_query("SELECT * FROM solicitudes") or die ("problemas consulta: ".mysql_error());
					while($reg=mysql_fetch_array($registro)) {
						echo "ID ".$reg["id"]. " ";
						echo " INVENTARIO ".$reg["inventario"]. " ";
						echo " N.SOLICITUD ".$reg["nombre_solicitud"]. " ";
						//echo '<img scr="'.$reg["foto"].'"width="100" heigth="100">';
						echo "LIDER DEP ".$reg["nombre_lider_dependencia"]. " ";
						echo "CARGO ".$reg["cargo"]. " ";
						echo "TEL ".$reg["telefono"]. " ";
						echo "FECHA ".$reg["fecha"]. "<br>";
					}
					?><br><a href="index.html">menu inicio</a></p>	
					</h1></ul>
		</nav><footer><derechos reservados="" de="" autor=""></derechos></footer></div>
	</body></html>