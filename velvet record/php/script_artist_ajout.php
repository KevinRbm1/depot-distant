<?php
    // Récupération du Nom :
    if (isset($_POST['nom']) && $_POST['nom'] != "") {
        $nom = $_POST['nom'];
    }
    else {
        $nom = Null;
    }

    // Récupération de l'URL (même traitement, avec une syntaxe abrégée)
    $url = (isset($_POST['url']) && $_POST['url'] != "") ? $_POST['url'] : Null;

    if ($nom == Null || $url == Null) {
        header("Location: artist_ajout.php");
        exit;
    }

    // Pas eu de redirection vers le formulaire (= si vérification des données est ok):
    require "db.php"; 
    $db = connexionBase();

    try {
        // Construction equête INSERT sans injection SQL :
        $requete = $db->prepare("INSERT INTO disc (disc_title, disc_year, disc_genre, disc_label, disc_price, disc_picture) VALUES (:disc_title, :disc_year, :disc_genre, :disc_label, :disc_price);");
        
    
        $requete->bindValue(":url", $url, PDO::PARAM_STR);
        $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
    
        $requete->execute();
    
        $requete->closeCursor();
    }
    
    catch (Exception $e) {
        var_dump($requete->queryString);
        var_dump($requete->errorInfo());
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_artist_ajout.php)");
    }
    
    header("Location: artists_.php");
    
    exit;
    ?>