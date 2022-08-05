 <!DOCTYPE html>
 <html lang="es">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>HTML-PHP</title>
 </head>

 <body>
     <h1>Ejemplo FOR en PHP</h1>

     <?PHP echo "<P>El Conteo que usted seleciono es:</P>";

        $seleccion = $_POST['seleccion'];
        $numfinal = $_POST['numfinal'];
        echo "</BR>";
        $Conteo = "";
        switch ($seleccion) {

            case ("1"):  //Consecutivo 
                for ($i = 1; $i <= $numfinal; $i++) {
                    $Conteo = $Conteo . " - " . $i;
                }
                echo "$Conteo";
                break;

            case ("2"): //Pares 
                for ($i = 1; $i <= $numfinal; $i++) {
                    $res = $i % 2;
                    if ($res == 0) {
                        $Conteo = $Conteo . " - " . $i;
                    }
                }
                echo "$Conteo";
                break;

            case ("3"): //Impares 
                for ($i = 1; $i <= $numfinal; $i++) {
                    $res = $i % 2;
                    if ($res != 0) {
                        $Conteo = $Conteo . " - " . $i;
                    }
                }
                echo "$Conteo";
                break;
            default:
                echo "Por Favor Seleccione una opcion";
        }
        echo "</BR></BR>";
        $fecha  = date("d/m/Y");
        echo "Fecha del Calulo : $fecha";

        echo ("</BR></BR>");
        echo "<a href='../ejemplo4.html'>Volver<a>";

        ?>
 </BODY>

 </HTML>