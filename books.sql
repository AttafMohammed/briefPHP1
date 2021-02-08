-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 08 fév. 2021 à 21:58
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testbrief`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `titre` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `auteur` varchar(30) COLLATE utf8_unicode_520_ci NOT NULL,
  `imageUpload` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(255) NOT NULL,
  `date_achat` date NOT NULL,
  `date_de_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `titre`, `auteur`, `imageUpload`, `prix`, `quantite`, `date_achat`, `date_de_publication`) VALUES
(20, '1111111', 'jfgjfgj', '', 5646, 435634, '2021-04-04', '2021-02-04'),
(21, 'yery', 'yery', 'téléchargement.png', 6534, 6436, '2021-04-04', '2021-02-04'),
(22, 'hdfzh', 'hdfzh', 'téléchargement.png', 643, 634, '2021-04-04', '2021-02-04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
