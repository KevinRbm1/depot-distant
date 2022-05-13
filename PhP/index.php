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
// 1 :
// echo (19 % 2)."\n";
$min = 0;
$max = 150;
$chiffres_pairs = 0;
    for ($i = 0; $i < 150; $i++)
    {
        // echo ($i % 2);
        if($i % 2 > 0) {
            // echo $i . "<br>";
        } 
        // $chiffres_pairs = 2*$i;
    }
 

    for ($i = 1; $i < 150; $i = $i +2)
    {
        echo $i . "<br>";
    }

?>
</body>
</html>