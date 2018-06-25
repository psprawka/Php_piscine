UPDATE db_psprawka.ft_table
SET creation_date = date_add(creation_date, INTERVAL 20 year)
WHERE id > 5;
