<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>
<body>
<!-- Snack 1
1.Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
2.Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
3.Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$arreyDiPartite = [
    [
        "Casa" => "Cantu",
        "ospiti" => "Olimpia",
        "puntiCasa" => "30",
        "puntiOspiti"=> "40"

    ],
    [
        "Casa" => "Cicago",
        "ospiti" => "Milano",
        "puntiCasa" => "90",
        "puntiOspiti"=> "30"

    ],
    [
        "Casa" => "Firenze",
        "ospiti" => "Roma",
        "puntiCasa" => "10",
        "puntiOspiti"=> "20"

    ],
];
/* var_dump($arreyDiPartite); */

for($i = 0;$i < count($arreyDiPartite);$i++){
    echo $arreyDiPartite[$i]["Casa"]." - ".$arreyDiPartite[$i]["ospiti"]." | ".$arreyDiPartite[$i]["puntiCasa"]."-".$arreyDiPartite[$i]["puntiOspiti"]."<br>";
}

?>


</body>
</html>