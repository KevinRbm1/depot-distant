/*1- Liste des clients français :*/
SELECT CompanyName AS Société, ContactName AS contact, ContactTitle AS Fonction, Phone AS Téléphone
FROM customers
WHERE Country LIKE 'France'

/*2- Liste des produits vendus par le fournisseur "Exotic Liquids" :*/
SELECT ProductName AS Produit, UnitPrice AS Prix
FROM products
JOIN Suppliers
WHERE CompanyName LIKE 'Exotic Liquids'

/*3- Nombre de produits mis à disposition par les fournisseurs français (tri par nombre de produits décroissant) :*/
SELECT CompanyName AS Fournisseur, UnitsInStock AS Nbre_produits
FROM suppliers 
JOIN products 
WHERE Country LIKE 'France' 
ORDER BY Nbre_produits DESC

/*4- Liste des clients français ayant passé plus de 10 commandes :*/
SELECT CompanyName AS Client, Quantity AS Nbre_Commandes
FROM customers
JOIN orders ON orders.CustomerID = customers.CustomerID
JOIN `order details`  ON orders.OrderID = `order details`.OrderID
WHERE Country LIKE 'France' AND Quantity > 10

/*5- Liste des clients dont le montant cumulé de toutes les commandes passées est supérieur à 30000 € :
    NB: chiffre d'affaires (CA) = total des ventes :*/
SELECT CompanyName AS Client, sum(UnitPrice*Quantity) AS CA, Country AS Pays
FROM customers
JOIN orders ON customers.CustomerID = orders.CustomerID
JOIN `order details` ON orders.OrderID = `order details`.OrderID
GROUP BY CompanyName
HAVING CA > '30000'

/*6- Liste des pays dans lesquels des produits fournis par "Exotic Liquids" ont été livrés :*/
SELECT country AS Pays
FROM products 
JOIN suppliers ON products.SupplierID = suppliers.SupplierID
WHERE CompanyName LIKE 'Exotic Liquids' 

/*7- Chiffre d'affaires global sur les ventes de 1997 :*/
SELECT COUNT(UnitPrice*Quantity) AS Montant_Ventes_97
FROM orders
JOIN `order details` ON orders.OrderID = orders.OrderID
WHERE YEAR (`OrderDate`) LIKE '1997' 

/*8- Chiffre d'affaires détaillé par mois, sur les ventes de 1997 :
    NB: chiffre d'affaires (CA) = total des ventes*/
SELECT DISTINCT MONTH(OrderDate) AS MOIS, ROUND(SUM(`order details`.UnitPrice*`order details`.Quantity),2) AS `Montant Ventes 97`
FROM orders
JOIN `order details` ON `order details`.OrderID = orders.OrderID
WHERE YEAR(OrderDate) IN (1997)
GROUP BY MONTH(OrderDate)

/*9- A quand remonte la dernière commande du client nommé "Du monde entier" ?*/
SELECT OrderDate AS Date_de_dernière_commande
FROM customers
JOIN orders ON customers.CustomerID = orders.CustomerID
WHERE CompanyName LIKE 'Du monde entier'

/*10- Quel est le délai moyen de livraison en jours ?*/
SELECT ROUND (AVG(DATEDIFF (ShippedDate, OrderDate))) AS Délai_moyen_de_livraison_en_jours
FROM orders