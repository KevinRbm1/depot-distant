let jeunes = 0;
let moyens = 0;
let vieux = 0;
let age = 0;
let tab = [];

while (true) {
    age = parseInt(prompt("Entrer un âge"));
    if (age <= 20) {
        jeunes++;
    }
    if (age > 20 && age <= 40) {
        moyens++;
    }
    if (age > 40) {
        vieux++;
    }
    if (age >= 100) {
        //vieux++;
        tab.push(age);
        break;
    } else {
        tab.push(age);
    }
}
console.log(tab);
console.log("il y a " + jeunes + " jeune.s, " + moyens + " intermédiaire.s, " + vieux + " ainé.s.");
window.alert("il y a " + jeunes + " jeune.s, \n" + moyens + " intermédiaire.s, \n& " + vieux + " ainé.s.");

// ou 2ème possibiblité


// var j=0;
// var a=0;
// var v=0;
// var personnes;

// do 
// {
//   personnes = window.prompt("Entrez votre age");
//   if ( personnes <20) 
//   {
//     j++;
//     console.log(personnes);
//   }

//   else if ((personnes >=40 ) && (personnes <=100)) 
//   {
//     v++;
//     console.log(v);
//   }

// }

// while (personnes < 100);

// window.alert("Il y a " + "" + j + "" + " jeunes\n " + "Il y a " + "" + a + "" + " adulte\n " + " Il y a " + " Il y a " + "" + v + "" +" vieux\n " + " dont "+ " 1 " + "" + " centenaire ");