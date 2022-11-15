create database upload;

use upload;

create table arquivos(
	id int not null auto_increment primary key,
    image VARCHAR(100),
    date DATE
);

SELECT * FROM arquivos;

drop table arquivos;

drop database upload;