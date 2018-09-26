#database
drop database if exists Empresa;
create database if not exists Empresa;
use Empresa;

#tabla usuario
drop table if exists usuario;
create table if not exists usuario(
id int auto_increment,
nombre varchar(75) collate utf8_general_ci unique,
contrasenha varchar(255) collate utf8_general_ci,
primary key (id)
);
#insert
insert into usuario (nombre,contrasenha) values("jesus",md5(1234));

