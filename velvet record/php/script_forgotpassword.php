<!-- 

a.  Le mot de passe oublié : donc demander à l'utilisateur de re-saisir son adresse mail de son compte et demander une re-génération.


b.  Générer un token qui va être stocké en BDD sur l'enregistrement de la ligne de l'utilisateur.

c.  Préparer ensuite un lien pour le mail : page forgotpassword.php avec le token en paramètre. ($_GET)
    de plus envoyer le lien par mail à l'utilisateur.


d.  Sur la page forgotpassword.php, prévoir un CAPTCHA pour vérifier l'existence d'un paramètre contenant le token à récupérer

e.  Vérifier dans la BDD que ce token existe et retrouver à quel compte il est concerné.
        - si le token existe, on permet à l'utilisateur de changer son password et on le met à jour (hashé) en BDD
        - sinon, on affiche un message d'erreur à l'utilisateur "lien invalide"

f.  Enfin supprimer le token utilisé de la BDD.

-->

<?php
require 'db.php';

$db = ConnexionBase();

// générer un token
$montoken = new DateTime();
var_dump($montoken);

$montoken = $montoken->format("YmdHis") . random_int(0, 999999); // date + un nombre aléatoire assez grand car il doit-être unique
var_dump($montoken);

$montoken = password_hash($montoken, PASSWORD_DEFAULT);  // hash est plus sûre que crypt car il faudra utiliser le methode GET // enr ça en bdd
var_dump($montoken);

$tokencode = urlencode($montoken);
var_dump($tokencode);

// adresse d'eaccés au formulaire de changemnt de password avec un lien crypté vers le comtpe de l'utilisateur
$lien = "http://localhost:3333/afpaDev/projets/record/forgotpassword.php?ytpy=" . $tokencode;
var_dump($lien);

// Vérifier en dbb si c'est la bonne puis donné l'accés si c'est OK
$tokendecode = urldecode($tokencode);
var_dump($tokendecode);
if (isset($tokendecode))

?>