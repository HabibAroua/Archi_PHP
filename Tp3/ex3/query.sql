Create database test;
create table categorie (idCategorie int primary key , libelleCategorie varchar(30) UNIQUE );
insert into  categorie values(1,'Sport');
insert into  categorie values(2,'Politique');
insert into  categorie values(3,'Technologie');
insert into  categorie values(4,'Musique');
insert into  categorie values(5,'Media');

CREATE table utilisateur
(
    idUser int PRIMARY key AUTO_INCREMENT ,
    nom varchar(20) ,
    prenom varchar(20) ,
    dateNaissance date ,
    siteWeb varchar(50) ,
    login varchar(30) UNIQUE ,
    motDePasse varchar(35)
);

CREATE table UtilisateurCategorie(idUser int , idCategorie int);
alter table UtilisateurCategorie add CONSTRAINT fk1 PRIMARY key(idCategorie,idUser);
alter table UtilisateurCategorie add CONSTRAINT fk2 FOREIGN key(idCategorie) REFERENCES categorie(idCategorie);
alter table UtilisateurCategorie add CONSTRAINT fk3 FOREIGN key(idUser) REFERENCES utilisateur(idUser);

CREATE table UtilisateurEmail
(
    idUser int , 
    eMail varchar(30) 
);

alter table UtilisateurEmail add constraint fk4 PRIMARY key(idUser,eMail);
alter table UtilisateurEmail add CONSISTENT fk5 FOREIGN key(idUser) REFERENCES utilisateur(idUser);

INSERT INTO `utilisateur` (`idUser`, `nom`, `prenom`, `dateNaissance`, `siteWeb`, `login`, `motDePasse`) VALUES (NULL, 'Salah', 'Ali', DATE('15/11/1994'), 'www.wwww.ww', 'aeaea', 'aze')