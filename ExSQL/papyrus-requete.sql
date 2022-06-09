/*1 - Quelles sont les commandes du fournisseur n°9120 ?*/
SELECT *
FROM `fournis` 
WHERE numfou LIKE 9120

/*2 - Afficher le code des fournisseurs pour lesquels des commandes ont été passées.*/
SELECT *
FROM `entcom`
WHERE numfou

/*3 - Afficher le nombre de commandes fournisseurs passées, et le nombre de fournisseur concernés.*/
SELECT COUNT(*), numfou, numcom
FROM `entcom`
WHERE numfou

/*or*/

SELECT numfou, numcom, COUNT(numcom) 
FROM `entcom`
WHERE numfou

/*4 - Extraire les produits ayant un stock inférieur ou égal au stock d'alerte, et dont la quantité annuelle est inférieure à 1000.
    Informations à fournir : n° produit, libellé produit, stock actuel, stock d'alerte, quantité annuelle)*/
SELECT libart, produit.codart
FROM `produit`
WHERE stkphy <= stkale AND qteann < 1000

/*5 - Quels sont les fournisseurs situés dans les départements 75, 78, 92, 77 ?
    L’affichage (département, nom fournisseur) sera effectué par département décroissant, puis par ordre alphabétique.*/
SELECT nomfou, SUBSTR(posfou 1, 2) AS dpt, posfou
FROM `fournis`
WHERE SUBSTR(posfou 1, 2) AS (75, 78, 92, 77)
ORDER BY dpt DESC posfou
-- à revoir! *fournis

/*6 - Quelles sont les commandes passées en mars et en avril ?*/
SELECT datcom
FROM `entcom`
WHERE MONTH(datcom) IN(3, 4)

/*7 - Quelles sont les commandes du jour qui ont des observations particulières ?
    Afficher numéro de commande et date de commande*/
SELECT datcom, obscom, numcom
FROM `entcom`
WHERE obscom LIKE 'commande%'

/*8 - Lister le total de chaque commande par total décroissant.
    Afficher numéro de commande et total*/
 SELECT SUM(priuni) AS prix_total, numcom, qtecde
FROM ligcom
WHERE numcom
order by prix_total desc
-- à revoir!

/*9 - Lister les commandes dont le total est supérieur à 10000€ ; on exclura dans le calcul du total les articles commandés en quantité supérieure ou égale à 1000.
    Afficher numéro de commande et total*/
SELECT numcom, (qtecde*priuni) AS prix_total
FROM ligcom
GROUP BY numcom
HAVING prix_total >= 10000 < 1000
ORDER BY prix_total

/*10 - Lister les commandes par nom de fournisseur.
    Afficher nom du fournisseur, numéro de commande et date*/
SELECT nomfou, numcom, datcom
FROM `fournis`
JOIN entcom

/*11 - Sortir les produits des commandes ayant le mot "urgent' en observation.
    Afficher numéro de commande, nom du fournisseur, libellé du produit et sous total (= quantité commandée * prix unitaire)*/
SELECT entcom.numcom, nomfou, libart, (qtecde*priuni) AS total
FROM produit
JOIN ligcom ON produit.codart = ligcom.codart
JOIN entcom ON ligcom.numcom = entcom.numcom
JOIN fournis ON entcom.numfou = fournis.numfou
WHERE obscom LIKE '%urgente'

/*12 - Coder de 2 manières différentes la requête suivante : Lister le nom des fournisseurs susceptibles de livrer au moins un article.*/
A/    SELECT nomfou, qteliv
      FROM `fournis`
      JOIN ligcom
      WHERE qteliv

-- or

B/      SELECT nomfou, qteliv
        FROM `ligcom`
        JOIN fournis
        WHERE qteliv

/*13 - Coder de 2 manières différentes la requête suivante : Lister les commandes dont le fournisseur est celui de la commande n°70210.*/
A/      SELECT nomfou, numcom, datcom
        FROM `entcom`
        JOIN fournis
        WHERE numcom LIKE '70210'

-- or

B/      SELECT nomfou, numcom, datcom
        FROM `fournis`
        JOIN entcom
        WHERE numcom LIKE '70210'      

/*14 - Dans les articles susceptibles d’être vendus, lister les articles moins chers (basés sur Prix1) que le moins cher des rubans (article dont le premier caractère commence par R).
    Afficher libellé de l’article et prix1*/ 
SELECT prix1, libart 
FROM vente
JOIN produit ON vente.codart = produit.codart
WHERE libart LIKE 'R%'
ORDER BY prix1

/*15 - Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte.
    La liste sera triée par produit puis fournisseur*/
SELECT stkale, stkphy, nomfou
FROM fournis
JOIN produit 
WHERE stkphy < stkale

/*16 - Sortir la liste des fournisseurs susceptibles de livrer les produits dont le stock est inférieur ou égal à 150 % du stock d'alerte, et un délai de livraison d'au maximum 30 jours.
    La liste sera triée par fournisseur puis produit*/

SELECT (stkphy/stkale) AS inf_eg, stkale, stkphy 
FROM fournis 
JOIN produit HAVING inf_eg <= 150 
ORDER BY inf_eg
-- No delai code

--or step 2.. 

SELECT libart, stkale, stkphy, fournis.numfou, nomfou, DATEDIFF(derliv, datcom) as 'delai'
FROM produit
JOIN vente
ON vente.codart = produit.codart
JOIN fournis
ON vente.numfou = fournis.numfou
JOIN ligcom
ON produit.codart = ligcom.codart
JOIN entcom -- mettre toujours les ON.
ON ligcom.numcom = entcom.numcom
WHERE stkphy <= '150%' and DATEDIFF(derliv, datcom) <= 30  AND stkphy <= stkale
ORDER BY fournis.nomfou, libart;

/*17 - Avec le même type de sélection que ci-dessus, sortir un total des stocks par fournisseur, triés par total décroissant.*/
SELECT libart, stkale, stkphy, fournis.numfou, nomfou, derliv
FROM produit
JOIN vente
ON vente.codart = produit.codart
JOIN fournis
ON vente.numfou = fournis.numfou
JOIN ligcom
ON produit.codart = ligcom.codart
ORDER BY stkphy DESC

/*18 - En fin d'année, sortir la liste des produits dont la quantité réellement commandée dépasse 90% de la quantité annuelle prévue.*/
SELECT qteann, qtecde 
FROM produit
JOIN ligcom
WHERE qtecde > '90%'

/*19 - Calculer le chiffre d'affaire par fournisseur pour l'année 2018, sachant que les prix indiqués sont hors taxes et que le taux de TVA est 20%.*/
 SELECT f.numfou, f.nomfou, sum(qtecde*priuni) AS CHIFFRE_D°AFFAIRE
FROM fournis f, ligcom l, entcom e
WHERE f.numfou = e.numfou
AND e.numcom = l.numcom
AND datcom = datcom
GROUP BY f.numfou, f.nomfou;
-- à revoir!