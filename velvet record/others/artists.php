<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet"> <!-- Feuille de style générale -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Artiste</title>
</head>
<?php
    include "header.php";
?>

<body>

<?php
include "db.php";
$db = connexionBase();

$requete = $db->query("SELECT * FROM artist");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();

?>
<div class="container">
<h1>Liste des artistes (<?= COUNT($tableau) ?>)</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th></th>
        </tr>

        <?php foreach ($tableau as $artist): ?>
        <tr>
            <td><?= $artist->artist_id ?></td>
            <td><?= $artist->artist_name ?></td>
            <td><a href="artist_detail.php?id=<?= $artist->artist_id ?>"><button type="button" class="btn btn-inline-danger btn-sm mx-5">Détails</button></a></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <a class="btn btn-sm btn-success mt-3 mb-5" href="script_artist_ajout.php" role="button">Ajouter</a>

    </div>
</body>

</body>

<?php
include "footer.php";
?>