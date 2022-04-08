    var.mon_formulaire = document.getElementById"java"
    mon_formulaire.addEventListener("submit", verif_formulaire);

    var nom = document.getElementById("java");

    var cp = document.getElementById("cp");

    var filtre_nom = new RegExp("^[a-z]+$");

    var filtre_cp = new RegExp("^[0-9]{5}$");

    function verif_formulaire(e) 
    {
        var resultat = filtre_nom.test(nom.value);

        if (nom.value == "er") {
    
            alert("veuillez renseigner votre nom !");
    
            e.preventDefault();

        else if (resultat == false) 
        {

                alert("veuillez renseigner correctement votre nom !");
        
                e.preventDefault();
        
        }

        var resultat_cp = filtre_cp.test(cp.value);

        if (cp.value == "") {
    
            alert("veuillez renseigner votre code postal !");
    
            //on empêche le formulaire d'être soumis ... envoyé.
            e.preventDefault();
    
        } else if (resultat_cp == false) {
    
            alert("veuillez renseigner correctement votre nom !");
    
            e.preventDefault();
    
        }    

    }
