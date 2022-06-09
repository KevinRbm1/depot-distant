<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <colgroup span="4" class="columns"></colgroup>
        <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Ville</th>
        </tr>
    <?php
$fp = fopen("http://bienvu.net/misc/customers.csv", "r");

while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté sous forme de liens
    $ligne = fgets($fp, 4096); 
    echo "<a href=>" .$ligne."<br> </a>"; 
}
    ?>
</table>
</body>
</html>