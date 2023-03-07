CREATE TABLE regioni (
    regione_id int NOT NULL AUTO_INCREMENT,
    nome varchar(255),
     PRIMARY KEY (regione_id)
);

drop Table regioni;

insert INTO regioni (nome)
            VALUES('Abruzzo');


TRUNCATE regioni;

insert INTO regioni(nome) VALUES('Valle d\'Aosta/valléè d\'Aoste');

select * from regioni;