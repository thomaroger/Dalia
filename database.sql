-- phpMyAdmin SQL Dump
-- version 3.2.0-rc1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 15 Mars 2012 à 21:58
-- Version du serveur: 5.1.37
-- Version de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `dalia`
--

-- --------------------------------------------------------

--
-- Structure de la table `desktop`
--

CREATE TABLE IF NOT EXISTS `desktop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `desktop`
--

INSERT INTO `desktop` (`id`, `prenom`, `nom`, `position`) VALUES
(1, 'Thomas', 'Roger', 'Developpeur'),
(2, 'Damien', 'Buton', 'Developpeur');

-- --------------------------------------------------------

--
-- Structure de la table `postit`
--

CREATE TABLE IF NOT EXISTS `postit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `desktop_id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `desktop_id` (`desktop_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `postit`
--


