<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>discs</title>
</head>
<body>
    <?php include "header.php"
    ?>

    <?php include "db.php"

    $disques 
?>

<div class="container">
<div class="row">
<h3>Ma grille CRUD-PHP </h3>
</div>
<div class="row">
<table class="table table-striped table-bordered">
<thead>
  <tr>
    <th>Nom</th>
    <th>Email-Adresse</th>
    <th>mobile</th>
  </tr>
</thead>
<tbody>
<?php 
include 'db.php';
$pdo = Database::connect();
$sql = 'SELECT * FROM artist ORDER BY id DESC';
foreach ($pdo->query($sql) as $row) {
echo '<tr>';
echo '<td>' . $row['name'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['mobile'] . '</td>';
echo '</tr>';
}
Database::disconnect();
?>
</tbody>
</table>
</div>
</div> <!-- /container -->
</body>
<?php include "footer.php"
?>
</html>