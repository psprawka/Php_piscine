SELECT title, summary FROM db_psprawka.film
WHERE summary LIKE "%42%" OR title LIKE "%42%"
ORDER BY duration ASC;
