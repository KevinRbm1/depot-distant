function getInteger(message) {
    let x = 0;
    while (x == 0 || Number.isNaN(x)) {
        x = parseInt(prompt(message));
    }
    return x;
}
//-------------------------------------------------------------
let rem = 0; // remise
let port = 0;
let tot = 0; //total
let totrem = 0;
let pap; // prix à payer
//-------------------------------------------------------------
let qtecom = getInteger("Saisissez la ou les quantité[s] commandée[s]");
console.log("Vous avez commandé " + qtecom + " article.s");
let pu = getInteger("Vous avez commandé " + qtecom + " articles.\n" + "Saisisez le prix unitaire");
console.log("Le prix unitaire est de " + pu + " €");
//-------------------------------------------------------------
tot = pu * qtecom;
//--------remise----------
if (tot >= 100 && tot <= 200) {
    rem = 5 / 100;
} else if (tot > 200) {
    rem = 10 / 100;
}
//---------------------------
totrem = tot - (tot * rem);
//---------port-----------
if (totrem > 500) {
    port = 0;
} else if (totrem <= 500) {
    port = 2 / 100 * totrem;
    if (port <= 6) {
        port = 6;
    }
}
pap = totrem + port;
console.log("Vous devez payer un montant de = " + pap.toFixed(2) + " €");
alert("Vous devez payer un montant de = " + pap.toFixed(2) + " €");