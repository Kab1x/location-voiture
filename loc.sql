-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 25 Juin 2019 à 19:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `loc`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Prenom` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Telephone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Objet` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Message` text CHARACTER SET utf8 NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL,
  `lecture` varchar(6) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`idclient`, `Nom`, `Prenom`, `Telephone`, `Objet`, `Message`, `Date`, `Heure`, `lecture`) VALUES
(14, 'sara', '', '0645254871', 'bnjr', 'alouer une accent', '2019-06-25', '12:26:48', 'non lu'),
(15, 'sara', '', '0645254871', 'bnjr', 'alouer une accent', '2019-06-25', '12:29:09', 'non lu'),
(23, 'sara', 'bz', '0569857410', 'confirmation', 'je voudrais allouer une peugeot est elle disponnible?!!!', '2019-06-25', '18:30:01', 'non lu');

-- --------------------------------------------------------

--
-- Structure de la table `mot_de_passe`
--

CREATE TABLE IF NOT EXISTS `mot_de_passe` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(60) CHARACTER SET utf8 NOT NULL,
  `mot_de_passe` varchar(60) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `mot_de_passe`
--

INSERT INTO `mot_de_passe` (`idadmin`, `Nom`, `mot_de_passe`) VALUES
(1, 'sara', '$ara');

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

CREATE TABLE IF NOT EXISTS `reserver` (
  `idvoiture` int(11) NOT NULL,
  `Nom` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Prenom` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Adresse` varchar(60) CHARACTER SET utf8 NOT NULL,
  `Telephone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Duree` int(11) NOT NULL,
  `Date_debut` date NOT NULL,
  `Heure_reception` time NOT NULL,
  `Date_reception` date NOT NULL,
  `Lecture` varchar(6) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idvoiture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reserver`
--

INSERT INTO `reserver` (`idvoiture`, `Nom`, `Prenom`, `Adresse`, `Telephone`, `Duree`, `Date_debut`, `Heure_reception`, `Date_reception`, `Lecture`) VALUES
(1, 'sara', 'benz', 'tiziouzou', '0655879642', 15, '2019-06-25', '12:15:11', '2019-06-25', 'non lu'),
(2, 'sara', 'benz', 'tiziouzou', '0655879642', 15, '2019-06-25', '12:15:11', '2019-06-25', 'non lu');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(60) NOT NULL,
  `Prenom` varchar(60) NOT NULL,
  `Adresse` varchar(60) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `Nom`, `Prenom`, `Adresse`, `Telephone`) VALUES
(9, 'sara', 'bz', '', '064525487145'),
(10, 'sara', 'bz', '', '064525487145'),
(11, 'fff', 'fff', '', '05693625421'),
(12, 'sara', 'benza', 'tiziouzourue5', '0685987452'),
(13, 'sara', 'benz', 'tiziouzou', '0655879642'),
(14, 'sara', 'benz', 'tiziouzou', '0658921045'),
(15, 'sara', 'bz', 'tiziouzou', '0685987452'),
(16, 'sara', 'benz', 'tiziouzou', '0658921045'),
(17, 'sara', 'benz', 'tiziouzou', '0658921045'),
(18, 'sara', 'benz', 'tiziouzou', '0658921045'),
(19, 'sara', 'benz', 'tiziouzou', '0658921045'),
(20, 'sara', 'benz', 'tiziouzou', '0658921045'),
(21, 'sara', 'benz', 'tiziouzou', '0658921045'),
(22, 'sara', 'benz', 'tiziouzou', '0658921045'),
(23, 'sara', 'benz', 'tiziouzou', '0658921045'),
(24, 'sara', 'benz', 'tiziouzou', '0658921045'),
(25, 'sara', 'benz', 'tiziouzou', '0658921045'),
(26, 'sara', 'benz', 'tiziouzou', '0655879642'),
(27, 'sara', 'benz', 'tiziouzou', '0655879642'),
(28, 'sara', 'benz', 'tiziouzou', '0655879642'),
(29, 'sara', 'benz', 'tiziouzou', '0655879642'),
(30, 'sara', 'benz', 'tiziouzou', '0655879642'),
(31, 'sara', 'benz', 'tiziouzou', '0655879642'),
(32, 'sara', 'benz', 'tiziouzou', '0655879642'),
(33, 'sara', '', '', '0645254871'),
(34, 'sara', '', '', '0645254871'),
(35, 'sara', 'bz', '', '0645254871'),
(36, 'eline', 'bz', '', '0569857410');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE IF NOT EXISTS `voiture` (
  `idvoiture` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(60) NOT NULL,
  `Photo` varchar(60) NOT NULL,
  `Categorie` varchar(60) NOT NULL,
  PRIMARY KEY (`idvoiture`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `voiture`
--

INSERT INTO `voiture` (`idvoiture`, `designation`, `Photo`, `Categorie`) VALUES
(1, 'caddy 2013', 'image/VoituresLocation/caddy.jpg', 'Utilitaire'),
(2, 'Hyundai Accent ', 'image/VoituresLocation/Accent.jpg', 'Touristiqe'),
(3, 'Hyundai I10', 'image/VoituresLocation/I10.jpg', 'Touristique'),
(4, 'Renault Symbol', 'image/VoituresLocation/Symbol.jpg', 'Touristique'),
(5, 'Picanto', 'image/VoituresLocation/Picanto.jpg', 'Touristique'),
(6, 'peugot 207', 'image/VoituresLocation/207.jpg', 'Touristique'),
(7, 'Skoda Octavia', 'image/VoituresLocation/Octavia.jpg', 'Touristique');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
