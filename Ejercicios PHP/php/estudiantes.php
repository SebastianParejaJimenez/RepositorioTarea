<?php
$nombre = $_POST['nombre'];
$materia = $_POST['materia'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

    $resultado = $nota1 + $nota2 + $nota3;

    $ntf = ($resultado / 3);


if ($ntf>=4.0) {
    $def= "APROBADO";
    echo "El estudiante" . $nombre . " En la materia " . $materia . " Fue " . $def;

}else{
    $def= "REPROBADO";
    echo "El estudiante" . $nombre . " En la materia " . $materia . " Fue " . $def;

}


?>