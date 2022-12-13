-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : db:3306
-- Généré le : mar. 13 déc. 2022 à 17:40
-- Version du serveur : 5.7.37
-- Version de PHP : 8.0.15

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
  `id` int(11) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `images` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `slug`, `nom`, `content`, `images`) VALUES
(1, 'galaxy_flip', 'Galaxy flip', 'Bonjour je suis un super téléphone', 'staticfiles/medias/articles/Galaxy_flip.webp'),
(2, 'galaxy_fold', 'Galaxy Fold', 'Hello je suis une desc', 'staticfiles/medias/articles/Galaxy_fold.webp'),
(3, 'galaxy_s22', 'Galaxy S22', 'Hello je suis une desc', 'staticfiles/medias/articles/Galaxy_S22.webp'),
(4, 'galaxy_s22_ultra', 'Galaxy S22 Ultra', 'Hello je suis une desc', 'staticfiles/medias/articles/Galaxy_S22_ultra.webp'),
(5, 'galaxy_s22_v2', 'Galaxy S22 v2', 'Hello je suis une desc', 'staticfiles/medias/articles/Galaxy_S22.webp');

-- --------------------------------------------------------

--
-- Structure de la table `pannier`
--

CREATE TABLE `pannier` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Users`
--

INSERT INTO `Users` (`id`, `name`, `email`, `password`) VALUES
(1, 'phen', 'phen@phen.fr', 'Azerty123'),
(2, 'aaron', 'astico@wanadoo.fr', 'Azerty123');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pannier`
--
ALTER TABLE `pannier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
