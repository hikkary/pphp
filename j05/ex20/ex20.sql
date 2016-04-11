SELECT film.id_genre, genre.nom 
AS nom_genre, distrib.id_distrib,
distrib.nom AS nom_distrib , 
film.titre AS 'titre film' 
FROM film,genre, distrib 
WHERE film.id_genre 
BETWEEN 4 AND 8 
AND distrib.id_distrib = film.id_distrib 
AND film.id_genre = genre.id_genre;