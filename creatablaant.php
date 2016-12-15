<?php

include ("Conexion.php");



$Con= mysqli_connect($s, $u, $p, $bd);

if (!$Con) {
    die("La conexion fallo: " . mysqli_connect_error());
}

$sql = "CREATE TABLE reg_computadores (
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
}

mysqli_close($Con);

?>