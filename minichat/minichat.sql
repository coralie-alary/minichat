-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 08 juin 2018 à 06:15
-- 
Version du serveur :  5.7.19
-- 
Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- 
Structure de la table `minichat`

--

DROP TABLE IF EXISTS `minichat`;



CREATE TABLE IF NOT EXISTS
 `minichat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  
`pseudo` varchar(255) NOT NULL,
  
`message` text NOT NULL,
  
`date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  
PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;



--
-- Déchargement des données de la table `minichat`


--

INSERT INTO `minichat` (`ID`, `pseudo`, `message`, `date`) 

VALUES

(1, 'Tom', 'Il fait beau aujourd\'hui, vous ne trouve pas ?', '2018-04-30 11:34:16'),

(5, 'coralie', 'coucou ', '2018-04-30 11:34:16'),

(6, 'theo', 'on va au parc', '2018-04-30 11:34:16'),

(7, 'Paul', 'bonne idÃ©e !', '2018-04-30 11:34:16'),

(8, 'Marie', 'j\'arrive ', '2018-04-30 11:34:16'),

(9, 'Marc', 'je viens aussi !', '2018-04-30 11:34:16'),

(10, 'coralie', 'ok', '2018-06-06 08:01:38'),

(11, 'theo', 'Ã  tout Ã  l\'heure', '2018-06-06 08:01:58'),

(12, 'coralie', 'Ã  tout de suite', '2018-06-08 08:00:51'),

(13, 'Martin', 'je viens !', '2018-06-08 08:06:45');


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
