-- Active: 1677862071814@@127.0.0.1@3306@form_in_php

CREATE TABLE
    regioni (
        regione_id int NOT NULL AUTO_INCREMENT,
        nome varchar(255),
        PRIMARY KEY (regione_id)
    );

CREATE TABLE
    province (
        province_id int NOT NULL AUTO_INCREMENT,
        nome varchar(255),
        sigla CHAR(2),
        regione_id int,
        PRIMARY KEY (province_id),
        Foreign Key (regione_id) REFERENCES regioni(regione_id)
    );

drop table province;

drop Table regioni;

insert INTO regioni (nome) VALUES('Abruzzo');

select regione_id from regioni;

TRUNCATE regioni;

TRUNCATE province;
 

select * from regioni;

select*from province;