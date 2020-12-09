<html lang="en" class"no-js"=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--comentario-->
	<meta content="Luis Ceron Martinez" name="author">
	<meta content="programacion sitios web" name="descripción">
	<meta content="programcio de sitios, web" name="keywords">
	<title>Programacion De Sitios WEB</title>
	<link rel="stylesheet" href="./Sitios WEB_files/normalize.css">
	<link rel="stylesheet" href="./Sitios WEB_files/estilo.css">
</head>
<body>  <!--script despues de body para agilizar-->
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
			<?php	// variables
					$dbhost="localhost";
					$dbuser="root";
					$dbpass="14091971";
					$dbname="base_clinica";
					//Para utilizar Mysqldump y realizar el respaldo, se debe declarar una variable haciendo referencia a la ubicacion del archivo mysqldump.exe
					$mysqldump='"C:\AppServ\MySQL\bin\mysqldump.exe"';
					$backup_file = $dbname;
					$backup_path='"C:\AppServ\backups\dbBackup.sql"';
					system("$mysqldump --no-defaults -u $dbuser -p$dbpass $dbname > $backup_path");
?>
<a href= "index.html">Menu inicio</a><br><img src="./fotos/2.jpg" alt="unad">
	</h1></ul></nav></div> </body></html>