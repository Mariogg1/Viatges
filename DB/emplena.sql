INSERT INTO categories (nom) VALUES ("Gastronomia");
INSERT INTO categories (nom) VALUES ("Romàntic");

INSERT INTO usuaris (nomUsuari, contrasenya, nom, primerCognom, segonCognom, correuElectronic, estat)
VALUES("adam69", "adam1234", "Adam", "Jalich", "Hamed", "adam69@hotmail.com", 1);

INSERT INTO usuaris (nomUsuari, contrasenya, nom, primerCognom, segonCognom, correuElectronic, estat)
VALUES("pep32", "pep1234", "Pep", "Garcia", "Ferrer", "pep32@hotmail.com", 1);

INSERT INTO usuaris (nomUsuari, contrasenya, nom, primerCognom, segonCognom, correuElectronic, estat)
VALUES("admin", "admin", "admin", "admin", "admin", "admin@hotmail.com", 1);

INSERT INTO administradors VALUES(3);

INSERT INTO experiencies (titol, text, imatge, estat, idCategoria, idUsuari)
VALUES("Viatge a Roma", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sodales nisl sem, ac commodo turpis aliquet at. In porta sapien posuere, porta purus ac, sagittis lacus. Mauris feugiat arcu quis libero ultricies porta. Nulla fermentum mauris sed turpis ornare, et ultrices urna hendrerit. Aenean feugiat dapibus tellus, quis pellentesque quam. Duis lobortis velit quis magna semper ultricies. Sed ullamcorper pellentesque lectus, et placerat libero malesuada ac. Nulla mollis est et risus pulvinar facilisis. Phasellus euismod risus vitae augue scelerisque blandit. In tellus nisl, faucibus ut nibh vel, euismod tempor lorem. Nullam iaculis, nisi sit amet vehicula iaculis, sapien turpis sagittis massa, eget tincidunt elit sapien vitae turpis. Duis ante sem, pharetra at efficitur sit amet, pretium ut sapien.

Mauris sit amet massa non mi imperdiet imperdiet vel in leo. Proin viverra viverra volutpat. Aenean vitae magna eu libero mattis tristique. Maecenas ac magna eget ex sagittis pretium et a leo. Sed ultricies leo eu tincidunt mollis. Vestibulum volutpat elit nec commodo sagittis. Sed id blandit nulla. Praesent congue consectetur faucibus. Nulla eget arcu ante. Maecenas fermentum tincidunt sem, non facilisis magna congue vitae. In suscipit non odio non vestibulum. Nam sodales nibh sed nunc faucibus elementum ac at dui. Nulla elementum molestie ante, quis posuere sem maximus nec. Mauris eu blandit erat, ac gravida libero. Praesent lacus mauris, commodo sit amet rhoncus sit amet, cursus sit amet nisi.

Aliquam ultricies urna eu purus egestas, et pellentesque quam dapibus. Fusce sodales nisi vitae vehicula suscipit. Aenean urna nulla, fermentum ut purus quis, lacinia pharetra nisl. Morbi at volutpat neque, ut commodo tellus. Fusce at tristique ipsum. Curabitur justo lacus, rhoncus et metus et, tempor tristique eros. Fusce vulputate ex vitae suscipit vehicula. Proin vitae purus quis eros sagittis pellentesque. Phasellus vel justo urna.", 
"roma.jpg", 1, 1, 1);

INSERT INTO experiencies (titol, text, imatge, estat, idCategoria, idUsuari)
VALUES("Viatge a París", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sodales nisl sem, ac commodo turpis aliquet at. In porta sapien posuere, porta purus ac, sagittis lacus. Mauris feugiat arcu quis libero ultricies porta. Nulla fermentum mauris sed turpis ornare, et ultrices urna hendrerit. Aenean feugiat dapibus tellus, quis pellentesque quam. Duis lobortis velit quis magna semper ultricies. Sed ullamcorper pellentesque lectus, et placerat libero malesuada ac. Nulla mollis est et risus pulvinar facilisis. Phasellus euismod risus vitae augue scelerisque blandit. In tellus nisl, faucibus ut nibh vel, euismod tempor lorem. Nullam iaculis, nisi sit amet vehicula iaculis, sapien turpis sagittis massa, eget tincidunt elit sapien vitae turpis. Duis ante sem, pharetra at efficitur sit amet, pretium ut sapien.

Mauris sit amet massa non mi imperdiet imperdiet vel in leo. Proin viverra viverra volutpat. Aenean vitae magna eu libero mattis tristique. Maecenas ac magna eget ex sagittis pretium et a leo. Sed ultricies leo eu tincidunt mollis. Vestibulum volutpat elit nec commodo sagittis. Sed id blandit nulla. Praesent congue consectetur faucibus. Nulla eget arcu ante. Maecenas fermentum tincidunt sem, non facilisis magna congue vitae. In suscipit non odio non vestibulum. Nam sodales nibh sed nunc faucibus elementum ac at dui. Nulla elementum molestie ante, quis posuere sem maximus nec. Mauris eu blandit erat, ac gravida libero. Praesent lacus mauris, commodo sit amet rhoncus sit amet, cursus sit amet nisi.

Aliquam ultricies urna eu purus egestas, et pellentesque quam dapibus. Fusce sodales nisi vitae vehicula suscipit. Aenean urna nulla, fermentum ut purus quis, lacinia pharetra nisl. Morbi at volutpat neque, ut commodo tellus. Fusce at tristique ipsum. Curabitur justo lacus, rhoncus et metus et, tempor tristique eros. Fusce vulputate ex vitae suscipit vehicula. Proin vitae purus quis eros sagittis pellentesque. Phasellus vel justo urna.", 
"paris.jpg", 1, 2, 2);

INSERT INTO experiencies (titol, text, imatge, estat, idCategoria, idUsuari)
VALUES("Viatge a Londres", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sodales nisl sem, ac commodo turpis aliquet at. In porta sapien posuere, porta purus ac, sagittis lacus. Mauris feugiat arcu quis libero ultricies porta. Nulla fermentum mauris sed turpis ornare, et ultrices urna hendrerit. Aenean feugiat dapibus tellus, quis pellentesque quam. Duis lobortis velit quis magna semper ultricies. Sed ullamcorper pellentesque lectus, et placerat libero malesuada ac. Nulla mollis est et risus pulvinar facilisis. Phasellus euismod risus vitae augue scelerisque blandit. In tellus nisl, faucibus ut nibh vel, euismod tempor lorem. Nullam iaculis, nisi sit amet vehicula iaculis, sapien turpis sagittis massa, eget tincidunt elit sapien vitae turpis. Duis ante sem, pharetra at efficitur sit amet, pretium ut sapien.

Mauris sit amet massa non mi imperdiet imperdiet vel in leo. Proin viverra viverra volutpat. Aenean vitae magna eu libero mattis tristique. Maecenas ac magna eget ex sagittis pretium et a leo. Sed ultricies leo eu tincidunt mollis. Vestibulum volutpat elit nec commodo sagittis. Sed id blandit nulla. Praesent congue consectetur faucibus. Nulla eget arcu ante. Maecenas fermentum tincidunt sem, non facilisis magna congue vitae. In suscipit non odio non vestibulum. Nam sodales nibh sed nunc faucibus elementum ac at dui. Nulla elementum molestie ante, quis posuere sem maximus nec. Mauris eu blandit erat, ac gravida libero. Praesent lacus mauris, commodo sit amet rhoncus sit amet, cursus sit amet nisi.

Aliquam ultricies urna eu purus egestas, et pellentesque quam dapibus. Fusce sodales nisi vitae vehicula suscipit. Aenean urna nulla, fermentum ut purus quis, lacinia pharetra nisl. Morbi at volutpat neque, ut commodo tellus. Fusce at tristique ipsum. Curabitur justo lacus, rhoncus et metus et, tempor tristique eros. Fusce vulputate ex vitae suscipit vehicula. Proin vitae purus quis eros sagittis pellentesque. Phasellus vel justo urna.", 
"londres.jpg", 1, 1, 1);