CREATE DATABASE db_login;

USE db_login;

CREATE TABLE pessoa (
	id int auto_increment,
	nome varchar(45) NOT NULL,
    cpf char(11) NOT NULL,
    data_nascimento date NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE usuario (
	id int auto_increment,
    nome varchar(45),
    email varchar(100),
    senha varchar(100),
    PRIMARY KEY(id)
);

CREATE TABLE cadastro (
	id int auto_increment,
    nome varchar(45) NOT NULL,
    email varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
    PRIMARY KEY(id)
);