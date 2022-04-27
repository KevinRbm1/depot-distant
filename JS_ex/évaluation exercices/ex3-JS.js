var tab = ["audrey","aurelien", "flavien", "jeremy", "laurent", "melik", "nouara", "salem", "samuel", "stephane"];
 
{
    var saisi = window.prompt("Veuillez choisir un prénom audrey, aurelien, flavien,jeremy,laurent,melik,nouara,salem,samuel,stephane. ")
    var rang = prenom.indexOf(saisi);
 
 
if (rang>=0)
{
    var sup = prenom.splice(rang,1);
    console.log("rang"+sup)
    console.log(prenom)
    var nb = prenom.push("")
 
    console.log(i)
 
}
//if wrong name;
else 
{
    alert ("Mauvais prénom")
}

console.log(prenom)