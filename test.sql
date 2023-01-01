-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db:3306
-- Généré le : dim. 01 jan. 2023 à 11:06
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `slug` varchar(250) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `images` varchar(250) NOT NULL,
  `prix` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `slug`, `nom`, `content`, `description`, `images`, `prix`) VALUES
(1, 'galaxy_flip', 'Galaxy flip', 'Bonjour je suis un super téléphone', 'Le Samsung Galaxy Flip est un smartphone pliable doté d\'un écran AMOLED de 6,7 pouces, d\'un processeur Qualcomm Snapdragon 865 et de 8 Go de RAM. Il possède un appareil photo principal de triple capteur de 12 mégapixels, ainsi qu\'un appareil photo avant de 10 mégapixels.', 'staticfiles/medias/articles/Galaxy_flip.webp', 1050),
(2, 'galaxy_fold', 'Galaxy Fold', 'Bien mieux qu\'un iphone', 'Le Samsung Galaxy Fold est un smartphone pliable doté d\'un écran AMOLED Flexible de 7,3 pouces, d\'un processeur Qualcomm Snapdragon 855 et de 12 Go de RAM. Il possède un appareil photo principal de triple capteur de 12 mégapixels, ainsi qu\'un appareil photo avant de 10 mégapixels', 'staticfiles/medias/articles/Galaxy_fold.webp', 1545),
(3, 'galaxy_s22', 'Galaxy S22', 'Hello je suis une desc', 'Le Samsung Galaxy S22 est un smartphone haut de gamme doté d\'un écran AMOLED de 6,2 pouces, d\'un processeur Qualcomm Snapdragon 888 et de 8 Go de RAM. Il possède un appareil photo principal de 64 mégapixels et un appareil photo avant de 32 mégapixels', 'staticfiles/medias/articles/Galaxy_S22.webp', 834),
(4, 'galaxy_s22_ultra', 'Galaxy S22 Ultra', 'Hello je suis une desc', 'Le Samsung Galaxy S22 Ultra est un smartphone haut de gamme doté d\'un écran AMOLED de 6,9 pouces avec une résolution de 1440 x 3200 pixels. Il est alimenté par un processeur Qualcomm Snapdragon 888 et dispose de 12 Go de RAM et de 256 Go de stockage interne (extensible via microSD). Il possède également un appareil photo principal de 108 mégapixels, ainsi qu\'un appareil photo avant de 40 mégapixels.', 'staticfiles/medias/articles/Galaxy_S22_ultra.webp', 1005),
(5, 'galaxy_s22_v2', 'Galaxy S22 v2', 'Hello je suis une desc', 'Le Samsung Galaxy S22 est un smartphone de milieu de gamme doté d\'un écran Super AMOLED de 6,5 pouces avec une résolution de 1080 x 2400 pixels. Il est alimenté par un processeur Samsung Exynos 9609 et dispose de 6 Go de RAM et de 128 Go de stockage interne (extensible via microSD). Il possède également un appareil photo principal de 64 mégapixels, ainsi qu\'un appareil photo avant de 32 mégapixels.', 'staticfiles/medias/articles/Galaxy_S22.webp', 834),
(6, 'galaxy_book2_pro', 'Galaxy Book2 Pro 360', 'Le meilleur pc du monde', 'Le Samsung Galaxy Book2 est un ordinateur portable 2-en-1 doté d\'un écran Super AMOLED de 12 pouces avec une résolution de 2160 x 1440 pixels. Il est alimenté par un processeur Qualcomm Snapdragon 850 et dispose de 4 Go de RAM et de 128 Go de stockage interne (extensible via microSD). Il possède également une caméra frontale de 5 mégapixels et une batterie qui peut durer jusqu\'à 20 heures.', 'staticfiles/medias/articles/galaxy_book2.webp', 1500);

-- --------------------------------------------------------

--
-- Structure de la table `pannier`
--

CREATE TABLE `pannier` (
  `id` int NOT NULL,
  `id_article` int NOT NULL,
  `quantite` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `name`, `email`, `password`) VALUES
(1, 'phen', 'phen@phen.fr', 'Azerty123'),
(2, 'aaron', 'astico@wanadoo.fr', 'Azerty123'),
(3, 'demo', 'demo@demo.fr', 'demo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pannier`
--
ALTER TABLE `pannier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `pannier`
--
ALTER TABLE `pannier`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
