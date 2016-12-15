 <?php

include ("Conexion.php");



$Con= mysqli_connect($s, $u, $p, $bd);

if (!$Con) {
    die("La conexion fallo: " . mysqli_connect_error());
}


$Foto_Producto =$_FILES["foto"]["name"];
$Ruta = $_FILES ["foto"] ["tmp_name"];
$Dest = "imagenes/" .$Foto_Producto;
copy($Ruta, $Dest);



$sql = "INSERT INTO reg_computadores (Serial_Producto, Foto_Producto, Velocidad_Procesador, Marca, Cap_RAM, Cap_Disco_Duro)
VALUES ('$_POST[Serial]', '$Dest', '$_POST[Velocidad_procesador]', '$_POST[Marca]', '$_POST[Capacidad_RAM]', '$_POST[Capacidad_Disco]')";

if (mysqli_query($Con, $sql)) {
    echo "Los datos se grabaron correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($Con);
}

mysqli_close($conn);
?>