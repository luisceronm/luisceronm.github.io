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
			<h1><a>Programacion de Sitios WEB</a></h1><a>
			
			
		</a></header><a>
			
		
	    </a><nav><a>
			</a><ul><a>
						
			<?php
				include ("Conexion.php");
				$Con= mysqli_connect($s, $u, $p, $bd);
				if (!$Con) {
					die("La conexion fallo: " . mysqli_connect_error());
				}

				$sql = "CREATE TABLE solicitudes (
				Serial_Producto  INT NOT NULL,
				Foto_Producto VARCHAR(200) NOT NULL,
				Velocidad_Procesador VARCHAR(10) NOT NULL,
				Marca VARCHAR(40) NOT NULL,
				Cap_RAM VARCHAR(10) NOT NULL,
				Cap_Disco_Duro VARCHAR(10) NOT NULL,
				KEY (Serial_Producto)
				)";

				if (mysqli_query($Con, $sql)) {
					echo "Tabla creada satisfactoriamente";
				} else {
					echo "Error al crear la tabla: " . mysqli_error($Con);
				