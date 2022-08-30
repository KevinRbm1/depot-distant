<?php
    require 'db.php';
    include 'fn.php';
    include 'header.php';
?>

<div class="p-3 mb-2 bg-gradient-warning">
            <div class="container mt-5 alert alert-success" role="alert">
                <div class="d-flex justify-content-center alert-warning">
                    <div class="col-md-8">
                        <div class="card rounded-0 shadow alert-danger">
                            <div class="card-body">
                                <h3 class="alert-heading text-danger text-center">Mot de passe oublié ?</h3>
                                <p class="text-center text-success">Aucun problème !</p>
                                <p class="text-center text-primary">Merci de saisir correctement l'adresse mail lié au compte pour recevoir un lien par mail. Ce lien vous permettra de changer de mot de passe.</p>
                                <hr>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Adresse mail:</label>
                                        <input type="email" class="form-control alert-info" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez une adresse mail">
                                        <br>
                                        <small id="emailHelp" class="form-text text-muted" id="login">Merci de saisir une adresse mail valide afin de recevoir le lien.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

<?php
    include 'footer.php';
?>