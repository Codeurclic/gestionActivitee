-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 12. Jun 2014 um 02:25
-- Server Version: 5.5.37-MariaDB-log
-- PHP-Version: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `gestion_activitee`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adherents`
--

CREATE TABLE IF NOT EXISTS `adherents` (
`id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `annee_scolaire` int(11) NOT NULL,
  `lycee` varchar(255) NOT NULL,
  `inscris` bigint(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `animateurs`
--

CREATE TABLE IF NOT EXISTS `animateurs` (
`id` int(11) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `inscris` bigint(11) NOT NULL,
  `tel` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Daten für Tabelle `animateurs`
--

INSERT INTO `animateurs` (`id`, `mdp`, `mail`, `nom`, `prenom`, `age`, `inscris`, `tel`, `admin`) VALUES
(14, '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'hcini', 'ramy', 0, 1380447799, 0, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projets`
--

CREATE TABLE IF NOT EXISTS `projets` (
`id` int(11) NOT NULL,
  `titre` varchar(800) NOT NULL,
  `description` varchar(500) NOT NULL,
  `fiche_projet` varchar(500) NOT NULL,
  `lien_preview` varchar(1000) NOT NULL,
  `categorie` int(11) NOT NULL,
  `temps` bigint(20) NOT NULL,
  `animateur` varchar(500) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `projets`
--

INSERT INTO `projets` (`id`, `titre`, `description`, `fiche_projet`, `lien_preview`, `categorie`, `temps`, `animateur`) VALUES
(1, 'titre de  test', 'description de test', 'http://oseox.fr/inc/img/icone/sql.jpg', 'http://oseox.fr/inc/img/icone/sql.jpg', 0, 0, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rapports`
--

CREATE TABLE IF NOT EXISTS `rapports` (
`id` int(11) NOT NULL,
  `temps` bigint(11) NOT NULL,
  `texte` text NOT NULL,
  `animateur` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adherents`
--
ALTER TABLE `adherents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animateurs`
--
ALTER TABLE `animateurs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rapports`
--
ALTER TABLE `rapports`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adherents`
--
ALTER TABLE `adherents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `animateurs`
--
ALTER TABLE `animateurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rapports`
--
ALTER TABLE `rapports`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
