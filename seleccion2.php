<?php
include("conexion.php");
$conec=mysql_connect($s,$u,$p,$bd)or die("no conecto serv ");
mysql_select_db($bd, $conec)or die("no conecto base de datos");
//$conec=mysql_connect($s,$u,$p,$bd ) or die ("no se pudo establesercon con serv");
//mysql_select_db($bd,$conec) or die ("no hay conexion con serv");

$registro=mysql_query("SELECT * FROM hojavidaequipos") or die ("problemas consulta: ".mysql_error());
while($reg=mysql_fetch_array($registro)) {
	echo "equipo ".$reg["id"]. "<br>";
	echo `<img scr="`.$reg["foto"].`"width="100" heigth="100"><br><br>`;
	echo "serial ".$reg["serial"]. " ";
	echo "velocidad ".$reg["velocidad"]. "<br>";
	echo "marca ".$reg["marca"]. "<br>";
	echo "ram ".$reg["ram"]. "<br>";
	echo "disco duro ".$reg["disco"]. "<br>";
	echo "procesador ".$reg["proces"]. "<br>";
	echo "fecha ".$reg["fecha"]. "<br> <br>";
}
?>
<a href="index.html">menu inicio</a></p>


