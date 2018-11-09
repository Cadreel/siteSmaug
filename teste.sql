mysql -u root -p

create DATABASE testeDB;

show databases;

create table teste_table_contato (
	id int,
	nome varchar(100),
	email varchar(50),
	plataforma varchar(15),
	mensagem varchar(250),
);