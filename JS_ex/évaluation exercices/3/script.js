// Exercice 3 : recherche d'un prénom
// Un prénom est saisi au clavier. On le recherche dans le tableau tab donné ci-après.

// Si le prénom est trouvé, on l'élimine du tableau en décalant les cases qui le suivent, et en mettant à blanc la dernière case. Si le prénom n'est pas trouvé un message d'erreur apparait et aucun prénom ne se supprime.

// ( exemple : ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", " "]; )

let tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
let prenom;
let index=0;

console.log(tab);

while(index < tab.length)
{
    prenom = window.prompt("Saisir un prénom listé ci-aprés :\n"+tab)
    if (tab.includes(prenom))
    {
        tab.splice(tab.indexOf(prenom),1); // cela supprimer le prénom
        tab.push(" ");
        console.log(tab);
        index++;
    }
    else if(!tab.includes(prenom))
    {
        console.log("N'est pas listé");
        window.alert("N'est pas listé");
        console.log(tab);
    }
}
