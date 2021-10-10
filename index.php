<?php
$cateto1 = 3;
$cateto2 = 4;

$hipotenusa = sqrt(pow($cateto1,2)+pow($cateto2,2));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Hipotenusa</title>
</head>
<body>
    <h1>Calculo de la hipotenusa de un triángulo rectángulo</h1></br>

    <p>Cateto 1: <?php echo $cateto1 ?> cm</p></br>
    <p>Cateto 2: <?php echo $cateto2 ?> cm</p></br>


    <h2>Valor de la hipotenusa: <?php echo $hipotenusa ?> cm</h2>
</body>
</html>