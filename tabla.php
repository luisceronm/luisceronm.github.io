<html>
<head>
  <title>Elevar un nmero base a un exponente meduante sumas</title>
</head>
<body>
<?php
 
if(isset($_REQUEST['base']) && isset($_REQUEST['exponente']))
{
	$suma = 0;
	$factor = 1;
	for($i=1;$i<=$_REQUEST['exponente'];$i++)
	{
		$suma = 0;
		for($j=1;$j<=$_REQUEST['base'];$j++)
		{
			$suma += $factor;
        }
		$factor = $suma;
   }
 
	echo "La base ".$_REQUEST['base']." elevada al exponente ".$_REQUEST['exponente']." da :".$suma ;
 
}
  ?>
 
  <form method="post" action="ejercicio2.php">
  <label for="fecha" style="font-size:24" class="req">Ingrese la base:</label> &nbsp &nbsp
  <input type="text" name="base" style="font-size:14">
  <br> <br>
  <label for="fecha" style="font-size:24" class="req">Ingrese el exponente:</label> &nbsp &nbsp
  <input type="text" name="exponente" style="font-size:14">
  <br> <br>
  <input style="font-size:24" type="submit" value="Calcular">
  </form>
 
</body>
</html>