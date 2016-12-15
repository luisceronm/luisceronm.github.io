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
						$registro=mysql_query("SELECT ID FROM solicitudes WHERE id='$_POST[id]'",$conec);
						if($reg=mysql_fetch_array($registro))
						 {
						mysql_query("DELETE FROM solicitudes WHERE id = '$_POST[id]'",$conec);
						echo "Se elimino el registro";
						}
						else
						{
						echo "No fue eliminado el registro";
						}
						?>

							<br><a href= "index.html">Ir a Inicio</a>

					
					<br>
					<img src="./fotos/2.jpg" alt="unad">
			</h1></ul>
		</nav>
		
	<footer><derechos reservados="" de="" autor=""></derechos></footer>
	</div>
	
	
	
</body></html>