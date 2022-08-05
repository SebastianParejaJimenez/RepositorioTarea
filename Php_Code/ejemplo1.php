<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HTML PHP</title>
</head>

<body>
   <H1>Pagina de Resultados</H1>

   <?php
   //Obtener valores introducidos en el formulario   
   $numero = $_POST['numero'];

   echo "<P>Ejemplo PHP 1</P>";
   echo "<P>Se muestra como concatenar y escribir en pantalla</P>";

   echo "<P>Concatenar una variable con un texto usando echo: </P>";
   echo "Forma 1: El valor digitado fue: " . $numero . "</BR>";
   echo "Forma 2: El valor digitado fue: $numero";
   echo "</BR>";

   echo "<P>Resultado de Elevar el numero enviado al cuadrado: </P>";
   $respuesta = $numero * $numero;
   echo "Forma 1: El cuadrado de : " . $numero . " es " . $respuesta . "</BR>";
   echo "Forma 2: El cuadrado de : $numero es $respuesta </BR>";
   echo "</BR>";
   echo "<a href='../ejemplo1.html'>Volver<a>";
   ?>
</body>

</html>