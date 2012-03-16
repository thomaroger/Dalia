-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Ven 16 Mars 2012 à 11:59
-- Version du serveur: 5.0.91
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dalia`
--

-- --------------------------------------------------------

--
-- Structure de la table `desktop`
--

CREATE TABLE IF NOT EXISTS `desktop` (
  `id` int(11) NOT NULL auto_increment,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `desktop`
--

INSERT INTO `desktop` (`id`, `prenom`, `nom`, `position`) VALUES
(1, 'Thomas', 'Roger', 'Developpeur'),
(2, 'Damien', 'Buton', 'Developpeur'),
(3, 'Romain', 'Rousselin', 'Chef de projet'),
(4, 'Sylvain', 'Domergue', 'Manager'),
(5, 'Hugo', 'Lebaron', 'Developpeur'),
(6, 'Emeric', 'Grangette', 'Developpeur'),
(7, 'Clement', 'Moysan', 'Developpeur'),
(8, 'Matthieu', 'Robin', 'Palm'),
(9, 'Martin', 'Arsac', 'Manager'),
(10, 'Guillaume', 'Estassy', 'Production'),
(11, 'Thierry', 'Longis', 'Referent'),
(12, 'Florent', 'Requin', 'Integrateur'),
(13, 'Richard', 'Nguyen', 'Developpeur'),
(14, 'Franck', 'Brami', 'Developpeur');

-- --------------------------------------------------------

--
-- Structure de la table `postit`
--

CREATE TABLE IF NOT EXISTS `postit` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `desktop_id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `posX` int(11) NOT NULL,
  `posY` int(11) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `desktop_id` (`desktop_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `postit`
--

INSERT INTO `postit` (`id`, `user_id`, `desktop_id`, `titre`, `texte`, `posX`, `posY`, `date`, `statut`) VALUES
(1, 0, 1, 'postit1', 'Ceci est un postIt', 0, 0, '0000-00-00 00:00:00', 0),
(2, 0, 1, 'postit2', 'Ceci est un postIt', 0, 0, '0000-00-00 00:00:00', 0),
(3, 0, 1, 'postit3', 'Ceci est un postIt', 0, 0, '2012-03-16 10:08:31', 0),
(4, 0, 2, 'postit4', 'Ceci est un postIt', 0, 0, '2012-03-16 10:10:26', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
