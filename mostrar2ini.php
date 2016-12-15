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