-- Sctript SQL de Criação (DDL) e população (DML) do Banco de dados
drop database if exists estacionamento;
create database estacionamento;
use estacionamento;
create table veiculo
(
    id_veiculo int primary key auto_increment,
    modelo varchar(10) not null,
    marca varchar(8) not null,
    placa VARCHAR (8) not null,
    cor VARCHAR (8)
);
create table vaga
(
    id_vaga int primary key auto_increment,
    entrada datetime not null,
    saida datetime null,
    localizacao varchar(64),
    id_veiculo int,
    constraint fk_id_veiculo foreign key (id_veiculo)
    references veiculo(id_veiculo)
);
create table valor
(
    id_valor int primary key auto_increment,
    preco FLOAT(10,2),
    valor_data date not null
);

select * from veiculo;
select * from vaga;