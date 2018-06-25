SELECT floor_number as floor, SUM(nb_seats) as seats FROM db_psprawka.cinema
GROUP BY floor
ORDER BY seats DESC;
