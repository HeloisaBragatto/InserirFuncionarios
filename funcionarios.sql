create database dados_funcionarios;
use dados_funcionarios;

create table dados_funcionarios(
codigo int(3) not null,
nome varchar(50) not null,
cargo varchar(50) not null,
departamento varchar(20) not null,
admissao varchar(30) not null, 
salario float(30) not null,
endereco varchar(10) not null,
email varchar(10) not null,
telefoneo varchar(18) not null,
primary key(codigo));

