<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack4</title>
</head>
<body>
    <!-- ## Snack 4

Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php
 function creaarreydicasuali($min ,$max,$iTems)
{
    $nuovoarrey = [];

    while(count($nuovoarrey)<15){

        $number = rand(0,20);

        if(!in_array($nuovoarrey,$number)){
            $nuovoarrey[]=$number;
        }
    }
   
}



?>
</body>
</html>