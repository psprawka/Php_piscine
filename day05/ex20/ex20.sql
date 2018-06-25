SELECT genre.id_genre as id_genre, genre.name as name_genre, distrib.id_distrib as id_distrib, distrib.name as name_distrib, film.title as title_film FROM db_psprawka.film
LEFT JOIN db_psprawka.genre ON genre.id_genre = film.id_genre
LEFT JOIN db_psprawka.distrib ON distrib.id_distrib = film.id_distrib
WHERE genre.id_genre BETWEEN 4 AND 8;

