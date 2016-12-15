<html lang="en" class"no-js"=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--comentario-->
	<meta content="Luis Ceron Martinez" name="author">
	<meta content="sitios web" name="descripción">
	<meta content="sitios, web" name="keywords">
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
			<h1><a>Clinica Reina Inmaculada- Programacion de Sitios WEB</a></h1><a>
				
		</a></header><a>
		
	    </a><nav><a>
			</a><ul><a>
					
					<?php
						include("conexion.php");
						$conec=mysql_connect($s,$u,$p,$bd ) or die ("no se pudo establesercon con serv");
						mysql_select_db($bd,$conec) or die ("no hay conexion con serv");
						$registro=mysql_query("SELECT * FROM solicitudes WHERE id='$_POST[nombre]'")
						or die ("problemas en la consulta:  ".mysql_error());
						while($reg=mysql_fetch_array($registro))
						{echo "ID ".$reg['id']."<br>";
						 echo " inventario ".$reg['inventario']."<br>";
						 echo "nombre_solicitud ".$reg['nombre_solicitud']."<br>";
						 echo "foto_equipo ".$reg['foto_equipo']."<br>";
						 echo "nombre_lider_dependencia ".$reg['nombre_lider_dependencia']."<br>";
						 echo "cargo ".$reg['cargo']."<br>";
						 echo "telefono".$reg['telefono']."<br><br>";
						}
						?>
						<body>
						<a href="index.html">regresar</a></p>
						</body>
					
					<br><br>
					<img src="./fotos/2.jpg" alt="unad">
			</h1></ul>
		</nav>
		
	<footer><derechos reservados="" de="" autor=""></derechos></footer>
	</div>
	
	
	
</body></html>