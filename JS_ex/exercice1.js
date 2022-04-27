    var.mon_formulaire = document.getElementById"get"
    mon_formulaire.addEventListener("submit", verif_formulaire);

    var nom = document.getElementById("nom");

    var prénom = document.getElementById("prénom")

    var sexe = document.getElementById("sexe")

    var cp = document.getElementById("cp");

    var filtre_nom = new RegExp("^[a-z]+$");

    var filtre_cp = new RegExp("^[0-9]{5}$");

    function verif_formulaire(e) 
    {
        var resultat = filtre_nom.test(nom.value);

        if (nom.value == "nom") 
        {
    
            alert("veuillez renseigner votre nom !");
    
            e.preventDefault();

        }
        
        else if (resultat == false) 
        {

                alert("veuillez renseigner correctement votre nom !");
        
                e.preventDefault();
        
        }

        var resultat_cp = filtre_cp.test(cp.value);

        if (cp.value == "cp") 
        {
    
            alert("veuillez renseigner votre code postal !");
    
            //empêche le formulaire d'être envoyé.
            e.preventDefault();
    
        } 
        
        else if (resultat_cp == false) 
        {
    
            alert("veuillez renseigner correctement votre nom !");
    
            e.preventDefault();
    
        }    
        
        var resultat_prénom = filtre_prénom.test(prénom.value);
        
        if (prénom.value == "prénom")
        {
            alert("veuillez renseigner votre prénom !")
        
            e.preventDefault();
        }

        else if (resultat == false)
        {
            alert("veuillez renseigner correctement votre prénom !")
            
            e.preventDefault()
        }

        var sexe="sexe"
            function sexe
       
            if (document.formulaire.civilite.value == "Masculin")
        {
            sexe = 1;
        }
        
        if (document.formulaire.civilite.value == "féminin")
        {
            sexe = 2;
        }
        {
            alert(var sexe)
        }

        var resultat_adresse = filtre_adresse.test(adresse.value)
        
        if (adresse.value == "adresse")
        {
            alert("veuillez renseigner votre adresse !")

            e.preventDefault()

        if else (resultat == false)
        {
            alert("veuillez renseigner correctement votre adresse")
            
            e.preventDefault()

        }
        
        var resultat_ville = filtre_ville.test(ville.value)
        
        if (ville.value == "ville")
        {
            alert("veuillez renseigner votre ville !")

            e.preventDefault()

        if else (resultat == false)
        {
            alert("veuillez renseigner correctement votre ville")
            
            e.preventDefault()

        }

        var resultat_Email = filtre_Email.test(Email.value)
        
        if (Email.value == "Email")
        {
            alert("veuillez renseigner votre Email !")

            e.preventDefault()
        }
        
        if else (resultat == false)
        {
            alert("veuillez renseigner correctement votre Email")
            
            e.preventDefault()
        
        }