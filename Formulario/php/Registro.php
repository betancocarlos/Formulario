<?php
include("/laragon/www/Formulario/php/conexion.php");
include("/laragon/www/Formulario/controlador/controlador.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color:gold;
        font-size: 25px;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }
      h3{
        align-items: center;
        background-color: #edf797;
        text-align: center;
        font-size: 24px;
        width: 400px;
      }
      a{
        align-items: center;
        color: cyan;
       
        
      }
     button{
      color: cyan;
      background-color: black;
      border-radius: 10px;
      align-items: center;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: 16px;
     }
    </style>
</head>
<body>
    
</body>
</html>

<?php

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM registro";
       
$result = mysqli_query($conexion,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<h3>Registro de Usuarios</h3>";

echo "<table>";
echo "<tr>";
echo "<th><h1>IDRegistro</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Apellido</th></h1>";
echo "<th><h1>Correo</th></h1>";
echo "<th><h1>Contraseña</th></h1>";
echo "<th><h1>Co_Contraseña</th></h1>";
echo "</tr>";


while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['idregistro']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['apellido'] . "</td></h2>";
    echo "<td><h2>" . $colum['correo'] . "</td></h2>";
    echo "<td><h2>" . $colum['contraseña'] . "</td></h2>";
    echo "<td><h2>" . $colum['co_contraseña'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
mysqli_close( $conexion );

   //echo "Fuera " ;
   echo'<a href="index.php"><button>Volver Atrás</button></a>';


?>
