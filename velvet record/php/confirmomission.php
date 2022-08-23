<?php
    require 'db.php';
    include 'fn.php';
    include 'header.php';
?>

<div class="container mt-4">
    <div class="alert alert-primary" role="alert">
        <h4 class="alert-heading text-danger text-center">Mot de passe oublié ?</h4>
        <p class="text-center text-success">Pas de soucis.</p>
        <hr>
        <p class="text-center">Merci de saisir correctement l'adresse mail lié au compte pour recevoir un lien par mail.<br>
            Ce lien vous permettra de changer de mot de passe.</p>
        </div>
    <div class="input-group mt-4 mx-4 mb-4">
        <span class="input-group-text text-light bg-dark" id="basic-addon3" title="adresse mail">Identifiant</span>
        <input type="text" class="form-control rounded" id="login" name="login" placeholder="Veuillez saisir votre adresse mail on se charge d'envoyé un lien par mail pour le changer" value="" aria-describedby="basic-addon3" title="Entrez l'adresse mail, un lien par mail vous sera envoyé pour le changer" require>
    </div>
</div>

<?php
    include 'footer.php';
?>