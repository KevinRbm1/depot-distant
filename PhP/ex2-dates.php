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
// Combien reste-t-il de jours avant la fin de votre formation ?
$echeance = '2022/06/16'; // La date des jours restants
echo 'Nb de jours restants : ', floor((strtotime($echeance) - time())/86400);
?>
</body>
</html>