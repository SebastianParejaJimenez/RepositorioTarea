<?php
$numero = $_POST['numero'];

$a=0;
while ($a < 10) {
    $a++;
    $total = $numero*$a;
    echo $numero . "X" . $a . "=" . $total;
    echo "<br>";
}






?>