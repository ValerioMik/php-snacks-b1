<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack3</title>
</head>
<body>
    
<!-- ## Snack 3

1.Creare un array di array. 
2.Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come    valore un array di post associati a quella data.
3.Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z
 -->

 <?php
 $post = [

     '10/12/2021'=>[

         'post1'=> "ciao a tutti"
     ],
     '10/15/2021'=>[

        'post1'=> "ciao"
    ],
    '10/19/2021'=>[

        'post1'=> "ciao a marco"
    ],
];

$arreykey=array_keys($post);

 for($x = 0 ; $x < count($arreykey); $x++){
        $date = $arreykey[$X];
        for($y=0;$y < count($date);$y++){
            echo $arreykey."".$date;
        }
    }
 ?>


</body>
</html>