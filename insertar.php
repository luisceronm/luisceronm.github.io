<?php

include("conexion.php");

if ( !empty ($_POST['submit']) )
{
	$conec=mysql_connect($s,$u,$p,$bd ) or die ("no se pudo establesercon con serv");
	mysql_select_db($bd,$conec) or die ("no hay conexion con serv");
	$foto=$_FILES["foto"]["name"];
	$ruta=$_FILES["foto"]["tmp_name"];
	$destino="foto/" .$foto;
	//copy($ruta, $destino);    
 	mysql_query("INSERT into reg_computadores (foto_producto, serial_producto, velocidad_procesador, marca, cap_ram, cap_disco_duro ) 
	VALUES ('$destino','$_POST[serial_producto]','$_POST[velocidad_procesador]','$_POST[marca]','$_POST[cap_ram]','$_POST[cap_disco_duro]')", $conec);
	
	echo" datos insertados correctamente";

}else
{ echo"<br> problemas al ingresar dato";
}
?>
<br><br>
<a href="index.html">menu principal</a></p>