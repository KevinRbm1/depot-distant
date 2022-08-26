<?php
    require 'db.php';
    include 'fn.php';
    include 'header.php';
?>

<div class="container mt-5">
    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading text-danger text-center">Mot de passe oublié ?</h4>
        <p class="text-center text-success">Pas de soucis.</p>
        <hr>
        <p class="text-center">Merci de saisir correctement l'adresse mail lié au compte pour recevoir un lien par mail.<br>
            Ce lien vous permettra de changer de mot de passe.</p>
        </div>
    <div class="input-group mt-4 mb-4">
        <span class="input-group-text text-light bg-primary" id="basic-addon3" title="adresse mail">Adresse mail</span>
        <input type="text" class="form-control rounded" id="login" name="login" placeholder="Saisissez votre adresse mail" value="" aria-describedby="basic-addon3" title="Entrez l'adresse mail, un lien par mail vous sera envoyé pour le changer" require>
    </div>
</div>

<?php
    include 'footer.php';
?>