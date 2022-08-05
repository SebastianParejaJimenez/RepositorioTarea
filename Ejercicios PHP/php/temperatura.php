<?php
$dia1 = $_POST['dia1'];
$dia2 = $_POST['dia2'];
$dia3 = $_POST['dia3'];
$dia4 = $_POST['dia4'];
$dia5 = $_POST['dia5'];
$dia6 = $_POST['dia6'];
$dia7 = $_POST['dia7'];


$promedio = ($dia1 + $dia2 + $dia3 + $dia4 + $dia5 + $dia6 + $dia7) / 7;

if ($promedio > 35){
    echo "Que semana tan calurosa";
} else if($promedio>=15 && $promedio<=35){
    echo "Que clima tan delicioso";

}else{
    echo "Que semana tan fria";
}





?>