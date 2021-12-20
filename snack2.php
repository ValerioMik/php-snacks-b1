<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
</head>
<body>
    <!-- ## Snack 2

1.Passare come parametri GET name, mail e age
2.verificare (cercando i metodi che non conosciamo nella documentazione) che:
3.name sia più lungo di 3 caratteri,
4.mail contenga un punto e una chiocciola
5.age sia un numero. 
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php
$nome = $_GET("nome");
$email = $_GET("email");
$age = $_GET("age");
$controlloMail = str_contains($email,".") && str_contains($email,"@") ;
$controlloNumero = is_numeric($age);

 if((strlen($nome)>=3) && ($controlloMail) && ($controlloNumero)){
    echo "Accesso riuscito";
 }else {
     echo "Accesso negato";
 }

?>

</body>
</html>