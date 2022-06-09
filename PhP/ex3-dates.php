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
// Comment déterminer si une année est bissextile ?
    $d = 1;
    $m = 1;
    $y = 2000;
    echo date('N', mktime(0,0,0, $m, $d, $y));
    // Affiche le jour de la semaine : 1 (pour Lundi) à 7 (pour Dimanche)
?>
</body>
</html>