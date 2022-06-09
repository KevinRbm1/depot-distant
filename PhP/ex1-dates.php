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
    // Trouvez le numéro de semaine de la date suivante : 14/07/2019.
    $date=explode('-','2019-07-14');     
    echo date('W',mktime(0,0,0,$date[1],$date[2],$date[0]));
    ?>
</body>
</html>