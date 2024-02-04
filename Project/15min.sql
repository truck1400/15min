-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 04 fév. 2024 à 15:43
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `15min`
--

-- --------------------------------------------------------

--
-- Structure de la table `biblio`
--

DROP TABLE IF EXISTS `biblio`;
CREATE TABLE IF NOT EXISTS `biblio` (
  `id` int NOT NULL,
  `biblio` text NOT NULL,
  `rue` text NOT NULL,
  `ville` text NOT NULL,
  `image` text NOT NULL,
  `temps` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `biblio`
--

INSERT INTO `biblio` (`id`, `biblio`, `rue`, `ville`, `image`, `temps`) VALUES
(1, 'Library of Letters and Human Sciences ', '3000 jean-brillant', 'Montréal', 'Library.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

DROP TABLE IF EXISTS `ecole`;
CREATE TABLE IF NOT EXISTS `ecole` (
  `id` int NOT NULL,
  `Ecole` text NOT NULL,
  `rue` text NOT NULL,
  `ville` text NOT NULL,
  `image` text NOT NULL,
  `temps` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ecole`
--
INSERT INTO `ecole` (`id`, `Ecole`, `rue`, `ville`, `image`, `temps`) VALUES
(1, 'Polythecnique', ' Chem. de Polytechnique', 'Montréal', 'poly.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `parks`
--

DROP TABLE IF EXISTS `parks`;
CREATE TABLE IF NOT EXISTS `parks` (
  `id` int NOT NULL,
  `Parks` text NOT NULL,
  `rue` text NOT NULL,
  `ville` text NOT NULL,
  `image` text NOT NULL,
  `temps` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `parks`
--

INSERT INTO `parks` (`id`, `Parks`, `rue`, `ville`, `image`, `temps`) VALUES
(1, 'ke Otsira\'kéhne Park', 'ch. de polytechnique', 'Montréal', 'parc1', 13);

-- --------------------------------------------------------

--
-- Structure de la table `resto`
--

DROP TABLE IF EXISTS `resto`;
CREATE TABLE IF NOT EXISTS `resto` (
  `Id` int NOT NULL,
  `resto` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `rue` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `ville` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `image` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `temps` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Déchargement des données de la table `resto`
--

INSERT INTO `resto` (`Id`, `resto`, `rue`, `ville`, `image`, `temps`) VALUES
(1, 'Caf? - Restaurant. Le Campus', 'Darlington', 'Montr?al', 'keb.jpg', 14);

-- --------------------------------------------------------

--
-- Structure de la table `soinsante`
--

DROP TABLE IF EXISTS `soinsante`;
CREATE TABLE IF NOT EXISTS `soinsante` (
  `id` int NOT NULL,
  `SoinSante` text NOT NULL,
  `rue` text NOT NULL,
  `ville` text NOT NULL,
  `image` text NOT NULL,
  `temps` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `soinsante`
--

INSERT INTO `soinsante` (`id`, `SoinSante`, `rue`, `ville`, `image`, `temps`) VALUES
(1, 'CHU Sainte-Justine', 'cote ste catherine', 'Montréal', 'chu.jpg', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
