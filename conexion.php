<?php

$s = "localhost";
$u = "root";
$p = "14091971";
$bd = "base_clinica";


// Create connection
$Con = mysqli_connect($s, $u, $p, $bd);

// Check connection
if (!$Con) {
    die("Conexion fallo: " . mysqli_connect_error());
}
echo "Conexion exitosa,<br> ";
?>