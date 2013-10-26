-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 26 Octobre 2013 à 16:18
-- Version du serveur: 5.5.34-0ubuntu0.13.10.1
-- Version de PHP: 5.5.3-1ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ajst_app`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

CREATE TABLE IF NOT EXISTS `adherents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `annee_scolaire` int(11) NOT NULL,
  `lycee` varchar(255) NOT NULL,
  `inscris` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Structure de la table `animateurs`
--

CREATE TABLE IF NOT EXISTS `animateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `inscris` bigint(11) NOT NULL,
  `tel` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `animateurs`
--

INSERT INTO `animateurs` (`id`, `identifiant`, `mdp`, `mail`, `nom`, `prenom`, `age`, `inscris`, `tel`, `admin`) VALUES
(14, 'hramy', '1a1dc91c907325c69271ddf0c944bc72', 'hssini.ramy@gmail.com', 'hcini', 'ramy', 0, 1380447799, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(800) NOT NULL,
  `description` varchar(500) NOT NULL,
  `fiche_projet` varchar(500) NOT NULL,
  `lien_preview` varchar(1000) NOT NULL,
  `categorie` int(11) NOT NULL,
  `temps` bigint(20) NOT NULL,
  `animateur` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `description`, `fiche_projet`, `lien_preview`, `categorie`, `temps`, `animateur`) VALUES
(1, 'titre de  test', 'description de test', 'http://oseox.fr/inc/img/icone/sql.jpg', 'http://oseox.fr/inc/img/icone/sql.jpg', 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `rapports`
--

CREATE TABLE IF NOT EXISTS `rapports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temps` bigint(11) NOT NULL,
  `texte` text NOT NULL,
  `animateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
