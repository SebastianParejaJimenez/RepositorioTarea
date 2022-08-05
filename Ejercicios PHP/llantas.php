<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2> SuperPonchadas</h2>
<p>Si se compran menos de 5 llantas el precio es de $30000 por cada una </p>
<p>Si se compran entre 5 y 10 llantas el precio es de $25000 por cada </p> 
<p>Si se compran más de 10 llantas el precio es de $20000 por cada una </p> 

<form action="llantas.php" method="POST">
<label for="">Cantidad de llantas a comprar</label>
<input type="number" name="llantas" id="" required>

<input type="submit" value="Enviar">
</form>
<?php 

$llantas = $_POST['llantas'];

if ($llantas<5) {
    $precio = 30000;
    $total= $precio * $llantas;
    echo "El total de la compra es de " . $total . "$";

}elseif ($llantas >= 5 && $llantas <= 10) {
    $precio = 25000;
    $total= $precio * $llantas;
    echo "El total de la compra es de " . $total . "$";

}elseif ($llantas>10) {
    $precio = 20000;
    $total= $precio * $llantas;
    echo "El total de la compra es de " . $total . "$";
    

}else{
    $alerta = "Ingrese un valor valido";
    echo "<script> alert('".$var."'); </script>";
}



?>


</body>
</html>