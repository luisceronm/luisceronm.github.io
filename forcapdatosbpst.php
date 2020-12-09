<!DOCTYPE html>
<html lang="en">
<head>
  <title>Programación de sitios web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

</body>

<form action= "Registros_Computadores.php" method= "post" enctype= "multipart/form-data" name="Formulario_Registro">

    <Table border="5px">
        
        <tr>
            <td> Serial </td>
            <td> <input type="text" name="Serial" /> <br/> <br/> </td>
        </tr>


        <tr>
            <td> <Strong>Foto: </strong> </td>
            <td> <input type="file" name="foto" id="foto"> </td>
        </tr>

        <tr>
            <td> Velocidad del procesador </td>
            <td> <input type="text" name="Velocidad_procesador" /> <br/> <br/> </td>
        </tr>
        
        <tr>
            <td> Marca </td>
            <td> <input  type ="text" name ="Marca"  /> <br/> <br/> </td>
        </tr>
        <tr>
            <td> Capacidad de RAM </td>
            <td> <input type="text" name="Capacidad_RAM" /> <br/> <br/> </td>
        </tr>

        <tr>
            <td> Capacidad de Disco Duro </td>
            <td> <input type="text" name="Capacidad_Disco" /> <br/> <br/> </td>
        </tr>

    </Table>

<input type="submit"  name="submit" value= "REGISTRAR"/>
</form>

<a href= "index.html"> Inicio </a></p>

</body>
</html>
