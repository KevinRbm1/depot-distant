<?php
    include 'header.php';
    require 'db.php';
?>

<body>
    <div class="container mt-3">
        <h1>Inscription</h1>
        <div class="row">
            <div class=col-12>
                <form action="script_registration.php" method="POST">
                    <div class="row">
                        <div class="input-group mt-4 mb-4">
                            <span class="input-group-text" title="NOM" id="username">Nom</span>
                            <input type="text" class="form-control" placeholder="Votre nom" title="Quel est votre nom" aria-label="username" name="user_name" aria-describedby="username" name="username">
                        </div>
                        <div class="input-group mt-4 mb-4">
                            <span class="input-group-text"title="Prénom" id="userfirstname">Prénom</span>
                            <input type="text" class="form-control" placeholder="Votre prénom" title="Quel est votre prénom" aria-label="userfirstname" name="user_firstname" aria-describedby="userfirstname" name="userfirstname">
                        </div>
                        <div class="input-group mt-4 mb-4">
                            <span class="input-group-text" title="Courriel" id="basic-addon1">M@il</span>
                            <input type="text" class="form-control" placeholder="Vore courriel est utile pour ouvrir une session" title="Veuillez saisir une adresse de courriel valide" aria-label="courriel" name="user_mail" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mt-4 mb-4">
                            <span class="input-group-text" id="userpwd" title="Mot de passe">Mot de passe</span>
                            <input type="password" class="form-control" title="Veillez saisir un mot se passe" placeholder="Entrer un mot de passe valide" aria-label="userpwd" aria-describedby="userpwd" name="user_password">
                        </div>
                    </div>
                    <button type="submit" class="mt-4 mb-4 btn btn-sm btn-success" title="Je valide l'inscription" alt="S'inscrire"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-save2" viewBox="0 0 16 16">
                            <img src="https://cdn-icons-png.flaticon.com/512/7010/7010100.png" width="24" height="24" alt="S'inscrire" title="S'inscrire" class="position-static translate-middle-x img-small">
                        </svg>S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
    $user = "";
    include 'footer.php';
?>