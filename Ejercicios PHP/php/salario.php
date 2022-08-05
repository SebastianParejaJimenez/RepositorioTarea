<html>

<head>
    <title>Salario</title>
</head>
<body>
<?php
$hnormales = $_POST['hnorm'];
$hextras = $_POST['hextras'];
$htrabajadas = $_POST['hsem'];
$pension = 0.10;
$salud = 0.15;

if ($htrabajadas > 40) {
    $extras = ($htrabajadas-40);
    $total = ($extras*$hextras) - $pension - $salud;

}else{
    $total = $htrabajadas - $pension - $salud;
}

echo ("El total a cobrar es de " . $total);
echo "<br>"; 
echo "<a href='../salarios.html'>Volver<a>"; 


?>

</body>

</html>