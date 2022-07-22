function tableMultiplication(nb) {

    // table de multiplications
    for (var i = 0; i <= 10; i++) {
        resultat = nb * i;

        console.log(nb + " * " + i + " = " + resultat);
    }

    console.log("Fin de la table de multiplication par " + nb);
    window.alert("Fin de la table de multiplication par " + nb);
}

let n = parseInt(prompt("Ecrivez un nombre"));
tableMultiplication(n);
