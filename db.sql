-- DROP DATABASE IF EXISTS mailToAction_Estelle;

-- CREATE DATABASE mailToAction_Estelle;

USE mailToAction_Estelle;

CREATE TABLE Eleve
(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(155) NOT NULL,
    prenom VARCHAR(155) NOT NULL,
    cours_id int NOT NULL
);

CREATE TABLE Salle
(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    num int NOT NULL
);


CREATE TABLE Cours
(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(150) NOT NULL,
    salle_id int NOT NULL
);


ALTER TABLE Eleve
ADD CONSTRAINT fk_cours_id FOREIGN KEY(cours_id) REFERENCES Cours(id);

ALTER TABLE Cours
ADD CONSTRAINT fk_salle_id FOREIGN KEY(salle_id) REFERENCES Salle(id);

INSERT INTO Eleve(nom,prenom,cours_id)
VALUES ('Bolut','Jean',2), ('Zali','Anais',5), ('Coussin','Alexandre',6);

INSERT INTO Salle (num)
VALUES (23), (22), (21);

INSERT INTO Cours(nom,salle_id)
VALUES ('Yoga', 1), ('Ashtanga', 2), ('Hatha', 3);
