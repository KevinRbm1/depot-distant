<?php
include 'header.php';
?>

<body>

  <?php include "db.php";
  $db = ConnexionBase();
  $disques = $db->prepare("SELECT * FROM disc, artist WHERE artist.artist_id = disc.artist_id ;"); // ORDER BY disc_title
  $disques->execute();

  $result = $disques->fetchAll(PDO::FETCH_OBJ);
  ?>

  <div class="container conteneur">
    <div class="row">
      <div class="col col-8">
        <h1 class="font-weight-bold">Liste des disques (<?= count($result) ?>)</h1>
      </div> <!-- End of col-11 , liste des disques -->
      <div class="col-1">
        <a class="btnadd btn btn-sm btn-success mx-1" href="disc_new.php" role="button">Ajouter</a>
      </div> <!-- End of col-1 , button 'ajouter' -->
    </div> <!-- End of row -->
  </div> <!-- End of container -->
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2">
      <?php foreach ($result as $disc) : ?>
        <div class="card mb-3 border-0" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-5">
              <img src="../img/jaquettes/<?= $disc->disc_picture ?>" class="img-fluid rounded" alt="...">
            </div> <!-- End of col for "jaquette" -->
            <div class="col-md-7">
              <div class="card border-0">
                <h5 class="title"><?= $disc->disc_title ?></h5>
                <p><?= $disc->artist_name ?></p>
                <p>Label : <?= $disc->disc_label ?></p>
                <p>Année : <?= $disc->disc_year ?></p>
                <p>Genre : <?= $disc->disc_genre ?></p>
                <p>Prix : <?= $disc->disc_price ?></p>
                <a href="disc_detail.php?id=<?= $disc->disc_id ?>"> <button type="button" title="Détails" alt="Détails" class="btn btn-sm btn-outline-primary btndisc mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                </svg></button></a>
              </div> <!-- End of div card -->
            </div> <!-- End of div pour les infos des disques -->
          </div> <!-- End of row gutter -->
        </div> <!-- End of card -->
      <?php endforeach; ?>
    </div> <!-- End of row row -->
  </div> <!-- End of container -->
</body>

<?php
include 'footer.php';
?>