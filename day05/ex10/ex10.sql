SELECT title as Title, summary as Summary, prod_year FROM db_psprawka.film
INNER JOIN genre ON genre.id_genre = film.id_genre WHERE genre.id_genre = 25
ORDER BY prod_year DESC;
