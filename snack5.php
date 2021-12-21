<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack5</title>
</head>
<body>
    <!-- ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
$paragrafo =  "Lorem ipsum dolor sit amet. consectetur adipisicing elit. Pariatur quibusdam alias perspiciatis quam quos eum quod tempora illum dolor optio ullam magnam, dolorum. id voluptatum. Sequi voluptatem magni tenetur earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corporis cupiditate, nostrum libero provident veritatis commodi? Consequatur nam voluptatum labore commodi sint. aspernatur dolore accusamus culpa iusto unde omnis rem.";

$diviso = explode(".",$paragrafo);

foreach($diviso as $value)
echo "$value <br>";
?>
</body>
</html>