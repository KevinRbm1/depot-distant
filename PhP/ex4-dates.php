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
// Montrez que la date du 32/17/2019 est erronée.
$date1 = DateTime::createFromFormat('Y-m-d H:i:s', '2019-17-32 00:00:00');
    if($date1 = 1){
    echo 'Le 32/17/2019 est une date éronée <br>';
}
else{
    echo 'Le 32/17/2019 est une date valide <br>';
}
?>
</body>
</html>