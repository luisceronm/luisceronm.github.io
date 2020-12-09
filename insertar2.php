<html lang="en" class"no-js"=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta content="Luis Ceron Martinez" name="author"><meta content="sitios web" name="descripción">
	<meta content="sitios, web" name="keywords">
	<title>Programacion De Sitios WEB</title>
	<link rel="stylesheet" href="./Sitios WEB_files/normalize.css">
	<link rel="stylesheet" href="./Sitios WEB_files/estilo.css">
</head>
<body>	<script scr="js/modernize.js"></script><!--script despues de body para agilizar-->
		<script scr="js/prefixfree.min.js"></script>
		<script scr="js/jquery-3.1.0.js"></script>
	<div id="contenidos">
		<img src="./fotos/clinica.jpg" alt="unad">	
		<header>
			<h1><a>Clinica Reina Inmaculada- Programacion de Sitios WEB</a></h1><a>
		</a></header><a>
	    </a><nav><a>
			</a><ul><a>
		<?php		include("conexion.php");
					if ( !empty ($_POST['submit']) )
					{	$conec=mysql_connect($s,$u,$p ) or die ("no se pudo establesercon con serv");
						mysql_select_db($bd,$conec) or die ("no hay conexion con serv");
						$foto=$_FILES["foto"]["name"];
						$ruta=$_FILES["foto"]["tmp_name"];
						$destino="foto/" .$foto;
						//copy($ruta, $destino);    
						mysql_query("INSERT INTO solicitudes (inventario, nombre_solicitud, foto_equipo, nombre_lider_dependencia, cargo, telefono  ) 
						VALUES ('$_POST[inventario]','$_POST[nombre_solicitud]','$destino', '$_POST[nombre_lider_dependencia]','$_POST[cargo]','$_POST[telefono]')", $conec);
						echo" datos insertados correctamente";
					}else
					{ echo"<br> problemas al ingresar dato";
					}
					?>	<br><br>
					<a href="index.html">menu principal</a></p>	
					<img src="./fotos/2.jpg" alt="unad">
			</h1></ul>
		</nav><footer><derechos reservados="" de="" autor=""></derechos></footer>	</div>
	
	
	
</body></html>