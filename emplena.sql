INSERT INTO CATEGORIES (nom) VALUES ("Gastronomia");
INSERT INTO CATEGORIES (nom) VALUES ("Romàntic");

INSERT INTO USUARIS (nomUsuari, contrasenya, nom, primerCognom, segonCognom, correuElectronic, estat)
VALUES("adam69", "adam1234", "Adam", "Jalich", "Hamed", "adam69@hotmail.com", 1);

INSERT INTO USUARIS (nomUsuari, contrasenya, nom, primerCognom, segonCognom, correuElectronic, estat)
VALUES("pep32", "pep1234", "Pep", "Garcia", "Ferrer", "pep32@hotmail.com", 1);

INSERT INTO ADMINISTRADORS VALUES(1);

INSERT INTO EXPERIENCIES (titol, text, imatge, lat, lng, estat, idCategoria, idUsuari)
VALUES("Viatge a Roma", "Lorem Ipsum is simply dummy text of the printing.", 
"roma.jpg", "41.895423", "12.500265", 1, 1, 1);

INSERT INTO EXPERIENCIES (titol, text, imatge, lat, lng, estat, idCategoria, idUsuari)
VALUES("Viatge a París", "Lorem Ipsum is simply dummy text of the printing.", 
"paris.jpg", "48.858393", "2.351511", 1, 2, 2);

INSERT INTO EXPERIENCIES (titol, text, imatge, lat, lng, estat, idCategoria, idUsuari)
VALUES("Viatge a Londres", "Lorem Ipsum is simply dummy text of the printing.", 
"londres.jpg", "51.485820", " -0.109844", 1, 1, 1);

SELECT * FROM experiencies;