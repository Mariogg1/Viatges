DROP DATABASE IF EXISTS viatges;

CREATE DATABASE viatges;

USE viatges;

CREATE TABLE experiencies(
	id INT(5) AUTO_INCREMENT PRIMARY KEY,
    titol VARCHAR (50) NOT NULL,
    dataPublicacio DATETIME DEFAULT CURRENT_TIMESTAMP,
    text VARCHAR(2000) NOT NULL,
    imatge VARCHAR(50) NOT NULL,
    valoracionsPositives INT(4) DEFAULT 0,
    valoracionsNegatives INT(4) DEFAULT 0,
    estat INT DEFAULT 1 CHECK(estat=0 || estat=1),
    idCategoria INT(2),
    idUsuari INT(5),
    FOREIGN KEY (idCategoria) REFERENCES categories(id)
    ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (idUsuari) REFERENCES usuaris(id)
    ON UPDATE CASCADE ON DELETE SET NULL
);

CREATE TABLE usuaris(
	id INT(5) AUTO_INCREMENT PRIMARY KEY,
    nomUsuari VARCHAR (10) NOT NULL,
    contrasenya VARCHAR (15) NOT NULL,
	nom VARCHAR (20) NOT NULL,
	primerCognom VARCHAR (20) NOT NULL,
    segonCognom VARCHAR (20) NOT NULL,
    correuElectronic VARCHAR(50) NOT NULL,
    estat INT DEFAULT 1 CHECK(estat=0 || estat=1)
);

CREATE TABLE categories(
	id INT(2) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR (20) NOT NULL
);

CREATE TABLE administradors(
	idUsuari INT(5),
    FOREIGN KEY (idUsuari) REFERENCES usuaris (id)
    ON UPDATE CASCADE ON DELETE SET NULL
);
