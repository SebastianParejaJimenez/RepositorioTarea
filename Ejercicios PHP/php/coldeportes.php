<?php

$edad = $_POST['edad'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

if ($edad <= 18 && $altura>=180 && $peso <= 80){

    echo("Usted cumple con las tres condicioes");

}if($edad > 18 && $altura>=180 && $peso <= 80){
    echo ("Usted no cuenta con la edad requerida");
}if($edad <= 18 && $altura<180 && $peso <= 80){
    echo("Usted no cuenta con la estatura requerida");
}if($edad <= 18 && $altura>=180 && $peso > 80){
    echo("Usted no cuenta con el peso requerido");
}else{
    echo("<br>");
    echo("Usted no cumple con los requerimientos, por lo tanto es rechazado");
}




?>