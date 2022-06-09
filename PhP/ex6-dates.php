<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Ajoutez 1 mois à la date courante.
$date = new DateTime('2022-05-23');
$date->add(new DateInterval('P1M')); //Où 'P1M' indique 'Période de 1 Mois'
echo $date->format('Y-m-d');
?>
</body>
</html>