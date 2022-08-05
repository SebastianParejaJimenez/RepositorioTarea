<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

for ($h = 00; $h <= 23; $h++)
{
    for ($m = 00; $m <= 59; $m++)
    {
        for ($s = 00; $s <= 59; $s++)
        {
            echo $h . ":" . $m . ":" . $s;
        }
    }
}


?>
</body>
</html>