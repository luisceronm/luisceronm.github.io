<html lang="en" class"no-js"=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--comentario-->
	<meta content="Luis Ceron Martinez" name="author">
	<meta content="diseño sitios web" name="descripción">
	<meta content="diseño, sitios, web" name="keywords">
	<title>Programacion De Sitios WEB</title>
	<link rel="stylesheet" href="./Diseño De Sitios WEB_files/normalize.css">
	<link rel="stylesheet" href="./Diseño De Sitios WEB_files/estilo.css">
</head>

<body>
	   <!--script despues de body para agilizar-->
		<script scr="js/modernize.js"></script>
		<script scr="js/prefixfree.min.js"></script>
		<script scr="js/jquery-3.1.0.js"></script>
	
	<div id="contenidos">
		<img src="./fotos/clinica.jpg" alt="unad">	
		<header>
			<h1><a>Clinica Reina Inmaculada- Programacion de Sitios WEB</a></h1><a>
		</a></header><a>
	
	    </a><nav><a>
			</a><ul><a>
			
				<?php
					include("conexion.php");
					$conec=mysql_connect($s,$u,$p,$bd)or die("no conecto serv ");
					mysql_select_db($bd, $conec)or die("no conecto base de datos");

					$registro=mysql_query("SELECT * FROM solicitudes") or die ("problemas consulta: ".mysql_error());
					while($reg=mysql_fetch_array($registro)) {
						echo "id ".$reg["id"]. " ";
						echo " inventario ".$reg["inventario"]. " ";
						echo "nombre_solicitud ".$reg["nombre_solicitud"]. " ";
						echo '<img scr="'.$reg["foto"].'"width="100" heigth="100"><br>';
						echo "nombre_lider_dependencia ".$reg["nombre_lider_dependencia"]. " ";
						echo "cargo ".$reg["cargo"]. " ";
						echo "telefono ".$reg[""]. "telefono";
						echo "fecha ".$reg["fecha"]. "<br>";
					}
					?><a href="index.html">menu inicio</a></p>	
					<img src="./fotos/2.jpg" alt="unad">
			</h1></ul>
		</nav>
		
	<footer><derechos reservados="" de="" autor=""></derechos></footer>
	</div>
	
	
	
</body></html>