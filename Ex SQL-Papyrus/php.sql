/* 1 - Afficher la liste des hôtels.
Le résultat doit faire apparaître le nom de l’hôtel et la ville*/
SELECT *
FROM `hotel` 

/* 2 - Afficher la ville de résidence de Mr White
Le résultat doit faire apparaître le nom, le prénom, et l'adresse du client*/
SELECT cli_nom,cli_prenom,cli_ville
FROM `client`
GROUP BY cli_nom

/* 3 - Afficher la liste des stations dont l’altitude < 1000
Le résultat doit faire apparaître le nom de la station et l'altitude*/
SELECT sta_nom,sta_altitude 
FROM `station` 
WHERE sta_altitude < 1000

/* 4 - Afficher la liste des chambres ayant une capacité > 1
Le résultat doit faire apparaître le numéro de la chambre ainsi que la capacite*/
SELECT cha_capacite, cha_numero 
FROM `chambre` 
WHERE cha_capacite > 1

/* 5 - Afficher les clients n’habitant pas à Londres
 Le résultat doit faire apparaître le nom du client et la ville*/
SELECT cli_nom, cli_ville
FROM client 
WHERE cli_ville
NOT LIKE "Londre"

/*6 Afficher la liste des hôtels située sur la ville de Bretou et possédant une catégorie > 3
Le résultat doit faire apparaître le nom de l'hôtel, ville et la catégorie*/
SELECT hot_nom, hot_ville
FROM `hotel`
WHERE hot_ville LIKE "Bretou"
AND hot_categorie > 3


/*Lot 2:*/

/*7 - Afficher la liste des hôtels avec leur station
Le résultat doit faire apparaître le nom de la station, le nom de l’hôtel, la catégorie, la ville*/
SELECT sta_nom, hot_nom, hot_categorie, hot_ville
FROM station
JOIN hotel

/*8 - Afficher la liste des chambres et leur hôtel
Le résultat doit faire apparaître le nom de l’hôtel, la catégorie, la ville, le numéro de la chambre*/
SELECT hot_nom, cha_numero, hot_categorie, hot_ville
FROM hotel
JOIN chambre

/*9 - Afficher la liste des chambres de plus d'une place dans des hôtels situés sur la ville de Bretou
Le résultat doit faire apparaître le nom de l’hôtel, la catégorie, la ville, le numéro de la chambre et sa capacité*/
SELECT hot_nom, cha_numero, hot_categorie, hot_ville, cha_capacite
FROM hotel
JOIN chambre
WHERE hot_ville LIKE "Bretou" AND cha_capacite > 1

/*10 - Afficher la liste des réservations avec le nom des clients
Le résultat doit faire apparaître le nom du client, le nom de l’hôtel, la date de réservation*/
SELECT cli_nom, hot_nom, res_date
FROM reservation
JOIN hotel
JOIN client

/*11 - Afficher la liste des chambres avec le nom de l’hôtel et le nom de la station
Le résultat doit faire apparaître le nom de la station, le nom de l’hôtel, le numéro de la chambre et sa capacité*/
SELECT sta_nom, hot_nom, cha_numero, cha_capacite 
FROM chambre
JOIN station
JOIN hotel

/*12 - Afficher les réservations avec le nom du client et le nom de l’hôtel avec datediff
Le résultat doit faire apparaître le nom du client, le nom de l’hôtel, la date de début du séjour et la durée du séjour*/
SELECT cli_nom, hot_nom, DATEDIFF(res_date_debut, res_date)
FROM reservation
JOIN client
JOIN hotel

/*13 - Compter le nombre d’hôtel par station*/
SELECT COUNT(*), sta_nom
FROM station
JOIN hotel ON hot_sta_id = sta_id
GROUP BY sta_nom

/*14 - Compter le nombre de chambres par station*/
SELECT COUNT(*), sta_nom
FROM chambre
JOIN hotel ON cha_hot_id = hot_id
JOIN station ON hot_sta_id = sta_id
GROUP BY sta_nom

/*15 - Compter le nombre de chambres par station ayant une capacité > 1*/
SELECT COUNT(*), sta_nom
FROM chambre
JOIN hotel ON cha_hot_id = hot_id
JOIN station ON hot_sta_id = sta_id
WHERE cha_capacite > 1
GROUP BY sta_id

/*16 - Afficher la liste des hôtels pour lesquels Mr Squire a effectué une réservation*/
SELECT DISTINCT hot_nom, cli_nom
FROM hotel
JOIN chambre ON hot_id = cha_hot_id
JOIN reservation ON res_cha_id = cha_id
JOIN client ON cli_id = res_cli_id
WHERE cli_nom LIKE "Squire"

/*17 - Afficher la durée moyenne des réservations par station*/
SELECT AVG(DATEDIFF (res_date_fin, res_date_debut)), sta_nom 
FROM `reservation`
JOIN chambre ON res_cha_id = cha_id
JOIN hotel ON cha_hot_id = hot_id
JOIN station ON hot_sta_id = sta_id
GROUP BY res_date
