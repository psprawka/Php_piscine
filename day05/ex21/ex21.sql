SELECT md5(replace(concat(phone_number, 42), 7, 9)) as ft5 FROM db_psprawka.distrib
WHERE id_distrib = 84;
