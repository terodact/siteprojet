-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 19 juin 2024 à 21:24
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `requette`
--

-- --------------------------------------------------------

--
-- Structure de la table `message_client`
--

DROP TABLE IF EXISTS `message_client`;
CREATE TABLE IF NOT EXISTS `message_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL COMMENT 'nom',
  `prenom` varchar(255) NOT NULL COMMENT 'prenom',
  `email` varchar(255) NOT NULL COMMENT 'email',
  `message` text NOT NULL COMMENT 'message',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message_client`
--

INSERT INTO `message_client` (`id`, `nom`, `prenom`, `email`, `message`) VALUES
(1, 'grbrb', 'feb', 'elvis@gmail.com', ' rgebebvzfd'),
(2, 'NIKIEMA', 'Christoin Elvis Jethro', 'elvisjethronikiema@gmail.com', ' Moi, je voudrais avoir une piscine dans ma chambre.\r\nMerci!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
