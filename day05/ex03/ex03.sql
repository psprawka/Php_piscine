INSERT INTO db_psprawka.ft_table (login, `group`, creation_date)
SELECT last_name, 'other', birthdate FROM db_psprawka.user_card
WHERE last_name LIKE "%a%" AND char_length(last_name) < 9
ORDER BY last_name
LIMIT 10;
