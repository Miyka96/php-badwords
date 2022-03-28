<?php

$testo= "Metti la cera, togli la cera, Metti la cera, togli la cera, Metti la cera, togli la cera, Metti la cera, togli la cera";
$lenght= strlen($testo);
$testo_censurato= str_replace("cera", "xxx", $testo);
$new_lenght= strlen($testo_censurato)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>La frase del giorno è:</h1>
    <h3> <?php echo $testo ?> </h3>
    <p>Questa frase è lunga <?php echo $lenght ?> parole</p>

    <h1>Abbiamo censurato tali amenità:</h1>
    <h3> <?php echo $testo_censurato ?> </h3>
    <p>Questa frase è lunga <?php echo $new_lenght ?> parole</p>

</body>
</html>