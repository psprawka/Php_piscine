CREATE TABLE db_psprawka.ft_table
(
id int primary key not null auto_increment,
login varchar(8) DEFAULT "toto" not null,
`group` ENUM('staff', 'student', 'other') not null,
creation_date DATE not null
);
