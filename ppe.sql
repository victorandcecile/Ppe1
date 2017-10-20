-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Octobre 2017 à 15:53
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppe`
--

-- --------------------------------------------------------

--
-- Structure de la table `forfait`
--

CREATE TABLE `forfait` (
  `date` date NOT NULL,
  `hebergement` int(11) NOT NULL,
  `repas` int(11) NOT NULL,
  `etape` int(11) NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `forfait`
--

INSERT INTO `forfait` (`date`, `hebergement`, `repas`, `etape`, `date_fin`) VALUES
('2017-10-20', 5, 2, 1, '2017-10-27'),
('2017-10-28', 3, 2, 0, '2017-11-04');

-- --------------------------------------------------------

--
-- Structure de la table `hors_forfait`
--

CREATE TABLE `hors_forfait` (
  `pseudo` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `montant` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_fin` date NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `hors_forfait`
--

INSERT INTO `hors_forfait` (`pseudo`, `image`, `description`, `montant`, `date`, `date_fin`, `statut`) VALUES
('vic', 'lien', 'test', 90, '2017-10-20', '2017-10-20', 0);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `type_connexion` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `visiteur`
--

INSERT INTO `visiteur` (`id`, `nom`, `prenom`, `login`, `mdp`, `type_connexion`) VALUES
(1, 'morel', 'victor', 'vic', 'fou', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
