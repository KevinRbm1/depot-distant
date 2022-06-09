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
$fichier = file('https://ncode.amorce.org/ressources/Pool/MS_FULL_STACK/PHP/src/liens.txt');
var_dump($fichier);

foreach ($fichier as $line) {
    echo "<a href=>" .$line."<br> </a>"; 
}

// or..

$fp = fopen('https://ncode.amorce.org/ressources/Pool/MS_FULL_STACK/PHP/src/liens.txt', "r");
while (!feof($fp)) 
{ 
    // Lecture de la ligne, du contenu de la ligne qui est affecté sous la forme de liens
    $ligne = fgets($fp, 4096); 
    echo "<a href=>" .$ligne."<br> </a>"; 
}
?>
</body>
</html>