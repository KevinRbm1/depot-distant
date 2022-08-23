<?php
    require 'db.php';
    $db = ConnexionBase();
    $pics = "";

    var_dump($_POST);
    print_r($_POST);

    if (isset($_POST['title']) && $_POST['title'] != "")
    {
        $title = $_POST['title'];
    } else {
        $title = null;
            }

    if (isset($_POST['artist']) && $_POST['artist'] != "")
    {
        $artist = $_POST['artist'];
    } else {
        $artist = null;
            }

    if (isset($_POST['year']) && $_POST['year'] != "")
    {
        $y = $_POST['year'];
    } else {
        $y = null;
    }

    if (isset($_POST['pics']) && $_POST['pics'] != "") {
        $pics = $_POST['pics'];
    } else {
        $pics = Null;
    }   

    if (isset($_POST['genre']) && $_POST['genre'] != "")
    {
        $genre = $_POST['genre'];
    } else {
        $genre = null;
            }

    if (isset($_POST['label']) && $_POST['label'] != "")
    {
        $lbl = $_POST['label'];
    } else {
        $lbl = null;
            }

    if (isset($_POST['price']) && $_POST['price'] != "")
    {
        $price = $_POST['price'];
    } else {
        $price = null;
            }

    if ($title == Null || $artist == Null || $y == Null || $genre == Null || $lbl == Null || $price == Null) {
        // header("Location: disc_add.php");
        exit;
    }

    if ($_FILES["pics"]["error"] == 0) {

        $aMimeTypes = array("img/gif", "img/jpeg", "img/pjpeg", "img/png", "img/x-png", "img/tiff", "image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

        // Type du fichier via l'extension FILE_INFO 
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimetype = finfo_file($finfo, $_FILES["pics"]["tmp_name"]);
        finfo_close($finfo);

        if (in_array($mimetype, $aMimeTypes))
        {
            if (move_uploaded_file($_FILES["pics"]["tmp_name"], "img/jaquettes/" . $_FILES["pics"]["name"])) {
                $pics = $_FILES["pics"]["name"]; // name pour avoir le nom d'origine et pas le nom temporaire
            }
        } 
        else 
        {
        echo "Seul les fichiers de moins de 2Mo en gif, jpeg, pjpeg, x-png, png ou tiff sont autorisés. Merci de choisir parmi ceux cités";    
        exit;
        }  
    }
    var_dump($pics);
    try{
        $myDisc = $db->prepare("INSERT INTO 
                                    disc
                                VALUES 
                                    (disc_id,?,?,?,?,?,?,?)
                                    -- (disc_id, disc_
                                ");
        $myDisc->execute(array($title,$y,$pics,$lbl,$genre,$price,$artist));
            $myDisc->closeCursor();
        }
        catch (Exception $e) {
            var_dump($myDisc->errorInfo());
            print_r($myDisc);
            echo "Erreur : " . $myDisc->errorInfo()[2] . "<br>";
            die("Fin du script (script_disc_modif.php)");
        }    
    header("Location: disc.php");