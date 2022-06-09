<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists</title>
</head>
<body>
    <?php
        include "db.php";
        $db = connexionBase();
        $requete = $db->query("SELECT * FROM artist");
        $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    ?>
</body>
</html>