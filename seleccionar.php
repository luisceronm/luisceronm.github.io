<?
include("conexion.php");
$conec=mysql_connect($s,$u,$p)
or die ("no se pudo conectar al serv");
mysql_select_db($bd,$conec)
or die ("no se pudo conectar a la db establesida");
$registro=mysql_query("SELECT " FROM hojavidaequipos")
or die ("problemas en la consulta:".mysql_error());
while($reg=mysql_fetch_array($registro))
{
	echo "usuario ".$reg[`id`]. "<br>";
	echo $reg[`foto`]."<br>";
	echo $reg[`serial`]."<br>";
	echo $reg[`velocidad`]."<br>";
	echo $reg[`fecha`]."<br> <br>";
	
}

?>