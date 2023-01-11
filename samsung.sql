CREATE DATABASE samsung;

USE samsung;

CREATE TABLE `article` (
   `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `slug` varchar(250) NOT NULL,
   `nom` varchar(255) DEFAULT NULL,
   `content` varchar(500) DEFAULT NULL,
   `description` varchar(500) NOT NULL,
   `images` varchar(250) NOT NULL,
   `prix` int(11) NOT NULL,
   `idCategorie` int(11) NOT NULL
);


CREATE TABLE `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nom` varchar(250) NOT NULL
);


CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `power` varchar(6) NOT NULL
);

INSERT INTO `article` (`id`, `slug`, `nom`, `content`, `description`, `images`, `prix`, `idCategorie`) VALUES
(1, 'galaxy_flip', 'Galaxy flip', 'Bonjour je suis un super téléphone', 'Le Samsung Galaxy Flip est un smartphone pliable doté d\'un écran AMOLED de 6,7 pouces, d\'un processeur Qualcomm Snapdragon 865 et de 8 Go de RAM. Il possède un appareil photo principal de triple capteur de 12 mégapixels, ainsi qu\'un appareil photo avant de 10 mégapixels.', 'staticfiles/medias/articles/Galaxy_flip.webp', 1050, 1),
(2, 'galaxy_fold', 'Galaxy Fold', 'Bien mieux qu\'un iphone', 'Le Samsung Galaxy Fold est un smartphone pliable doté d\'un écran AMOLED Flexible de 7,3 pouces, d\'un processeur Qualcomm Snapdragon 855 et de 12 Go de RAM. Il possède un appareil photo principal de triple capteur de 12 mégapixels, ainsi qu\'un appareil photo avant de 10 mégapixels', 'staticfiles/medias/articles/Galaxy_fold.webp', 1545, 1),
(3, 'galaxy_s22', 'Galaxy S22', 'Hello je suis une desc', 'Le Samsung Galaxy S22 est un smartphone haut de gamme doté d\'un écran AMOLED de 6,2 pouces, d\'un processeur Qualcomm Snapdragon 888 et de 8 Go de RAM. Il possède un appareil photo principal de 64 mégapixels et un appareil photo avant de 32 mégapixels', 'staticfiles/medias/articles/Galaxy_S22.webp', 834, 1),
(4, 'galaxy_s22_ultra', 'Galaxy S22 Ultra', 'Hello je suis une desc', 'Le Samsung Galaxy S22 Ultra est un smartphone haut de gamme doté d\'un écran AMOLED de 6,9 pouces avec une résolution de 1440 x 3200 pixels. Il est alimenté par un processeur Qualcomm Snapdragon 888 et dispose de 12 Go de RAM et de 256 Go de stockage interne (extensible via microSD). Il possède également un appareil photo principal de 108 mégapixels, ainsi qu\'un appareil photo avant de 40 mégapixels.', 'staticfiles/medias/articles/Galaxy_S22_ultra.webp', 1005, 1),
(5, 'galaxy_s22_v2', 'Galaxy S22 v2', 'Hello je suis une desc', 'Le Samsung Galaxy S22 est un smartphone de milieu de gamme doté d\'un écran Super AMOLED de 6,5 pouces avec une résolution de 1080 x 2400 pixels. Il est alimenté par un processeur Samsung Exynos 9609 et dispose de 6 Go de RAM et de 128 Go de stockage interne (extensible via microSD). Il possède également un appareil photo principal de 64 mégapixels, ainsi qu\'un appareil photo avant de 32 mégapixels.', 'staticfiles/medias/articles/Galaxy_S22.webp', 834, 1),
(6, 'galaxy_book2_pro', 'Galaxy Book2 Pro 360', 'Le meilleur pc du monde', 'Le Samsung Galaxy Book2 est un ordinateur portable 2-en-1 doté d\'un écran Super AMOLED de 12 pouces avec une résolution de 2160 x 1440 pixels. Il est alimenté par un processeur Qualcomm Snapdragon 850 et dispose de 4 Go de RAM et de 128 Go de stockage interne (extensible via microSD). Il possède également une caméra frontale de 5 mégapixels et une batterie qui peut durer jusqu\'à 20 heures.', 'staticfiles/medias/articles/galaxy_book2.webp', 1500, 3),
(7, 'galaxy_s20fe', 'Galaxy S20 FE 5G', 'Ce téléphone est le meilleur niveau qualité prix. ', 'Le Samsung Galaxy S20 FE est un smartphone haut de gamme doté d\'un écran Super AMOLED de 6,5 pouces, d\'un processeur Snapdragon 865 et de 6 Go de RAM. Il dispose également d\'une triple caméra arrière, d\'un capteur d\'empreintes digitales intégré à l\'écran.', 'staticfiles/medias/articles/Galaxy_S20FE.webp', 799, 1),
(8, 'galaxy_s21fe', 'Galaxy S21 FE 5G', 'Le téléphone parfait pour ceux qui cherchent une puissance de traitement maximale', 'Le Samsung Galaxy S21 FE est un modèle encore plus puissant, avec un écran Super AMOLED de 6,7 pouces, un processeur Snapdragon 888 et 8 Go de RAM. Il propose également une triple caméra arrière et un capteur d\'empreintes digitales intégré à l\'écran, ainsi qu\'une batterie de 4500 mAh.', 'staticfiles/medias/articles/Galaxy_S21FE.webp', 899, 1),
(9, 'galaxy_s21fe', 'Galaxy S21 FE 5G', 'Le téléphone parfait pour ceux qui cherchent une puissance de traitement maximale', 'Le Samsung Galaxy S21 FE est un modèle encore plus puissant, avec un écran Super AMOLED de 6,7 pouces, un processeur Snapdragon 888 et 8 Go de RAM. Il propose également une triple caméra arrière et un capteur d\'empreintes digitales intégré à l\'écran, ainsi qu\'une batterie de 4500 mAh.', 'staticfiles/medias/articles/Galaxy_S21FE.webp', 899, 1),
(10, 'galaxy_s22', 'Galaxy S22+ 5G', 'Le téléphone le plus performant et polyvalent de la game 2022', 'Le Samsung Galaxy S22 est le dernier modèle de la gamme Galaxy S, avec un écran Super AMOLED de 6,8 pouces, un processeur Snapdragon 888 et 12 Go de RAM. Il offre également une quadruple caméra arrière, un capteur d\'empreintes digitales intégré à l\'écran et une grande batterie de 5000 mAh. En outre, il est doté de la technologie 5G pour une connexion encore plus rapide.', 'staticfiles/medias/articles/Galaxy_s22+.webp', 999, 1),
(11, 'galaxy_tab_s6', 'Galaxy Tab S6', 'Tablette tactile haut de gamme avec écran Super AMOLED de 10,5 pouces', 'Le Samsung Galaxy Tab S6 est une tablette haut de gamme dotée d\'un écran Super AMOLED de 10,5 pouces, d\'un processeur Snapdragon 855 et de 6 Go de RAM. Elle dispose également d\'une caméra arrière double et d\'un lecteur d\'empreintes digitales intégré à l\'écran. Sa batterie de 7040 mAh offre une grande autonomie.', 'staticfiles/medias/articles/Galaxy_tab_S6.webp', 799, 2),
(12, 'galaxy_tab_s7', 'Galaxy Tab S7', 'Tablette tactile haut de gamme avec écran Super AMOLED de 11 pouces', 'Le Samsung Galaxy Tab S7 est une tablette haut de gamme dotée d\'un écran Super AMOLED de 11 pouces, d\'un processeur Snapdragon 865 et de 6 Go de RAM. Elle dispose également d\'une caméra arrière double et d\'un lecteur d\'empreintes digitales intégré à l\'écran. Sa batterie de 8000 mAh offre une grande autonomie.', 'staticfiles/medias/articles/Galaxy_tab_S7.webp', 899, 2),
(13, 'galaxy_tab_s8', 'Galaxy Tab S8', 'Tablette tactile haut de gamme avec écran Super AMOLED de 12,4 pouces', 'Le Samsung Galaxy Tab S8 est une tablette haut de gamme dotée d\'un écran Super AMOLED de 12,4 pouces, d\'un processeur Snapdragon 870 et de 8 Go de RAM. Elle dispose également d\'une caméra arrière triple et d\'un lecteur d\'empreintes digitales intégré à l\'écran. Sa batterie de 9000 mAh offre une grande autonomie.', 'staticfiles/medias/articles/Galaxy_tab_S8.webp', 999, 2),
(14, 'galaxy_book2_pro', 'Galaxy Book2 PRO', 'Un ordinateur portable polyvalent et performant pour votre travail et vos loisirs.', 'Le Samsung Galaxy Book2 PRO est un ordinateur portable performant doté d\'un écran AMOLED de 13,3 pouces, d\'un processeur Intel Core i5 et de 8 Go de RAM. Il dispose également d\'une batterie longue durée, d\'un clavier rétroéclairé et d\'un stylet intégré.', 'staticfiles/medias/articles/Galaxy_book_pro2.webp', 1699, 3);

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Smartphone'),
(2, 'Tablette'),
(3, 'Galaxy Book'),
(4, 'Montre');

INSERT INTO `utilisateur` (`id`, `name`, `email`, `password`, `power`) VALUES
(1, 'phen', 'phen@phen.fr', 'Azerty123', 'admin'),
(2, 'aaron', 'astico@wanadoo.fr', 'Azerty123', 'user'),
(3, 'demo', 'demo@demo.fr', 'demo', 'user'),
(4, 'admin', 'admin@admin.fr', 'admin', 'admin');
