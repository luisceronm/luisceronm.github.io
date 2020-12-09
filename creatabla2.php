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

				$sql = "CREATE TABLE Solicitudes (
				id INT NOT NULL AUTO_INCREMENT,
				inventario VARCHAR(10),
				nombre_solicitud VARCHAR(100) NOT NULL,
				Foto_equipo VARCHAR(200) NOT NULL,
				nombre_lider_dependencia VARCHAR(100) NOT NULL,
				cargo VARCHAR(100) NOT NULL,
				telefono VARCHAR(50) NOT NULL,
				fecha TIMESTAMP NOT NULL,
				KEY (id)
				)";

				if (mysqli_query($Con, $sql)) {
					echo "Tabla creada satisfactoriamente";
				} else {
					echo "Error al crear la tabla: " . mysqli_error($Con);
				}

				mysqli_close($Con);
				?>
						
					<h1><li><a href="index.html" class="menu">Menu inicial</a></li><br><h1>
					<img src="./fotos/unad2.jpg" alt="unad">
			</h1></ul>
		</nav>
		
	<footer><derechos reservados="" de="" autor=""></derechos></footer>
	</div>
	
	
	
</body></html>