SELECT SUBSTRING(REVERSE(phone_number), 1, 9) as rebmunenohp FROM db_psprawka.distrib
WHERE phone_number LIKE "05%";
