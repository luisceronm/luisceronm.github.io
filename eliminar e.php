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


