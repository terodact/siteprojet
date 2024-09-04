-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 20 juin 2024 à 11:50
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_chambre` int NOT NULL AUTO_INCREMENT,
  `hôtel` varchar(255) NOT NULL COMMENT 'choisi un hôtel',
  `nom_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adresse_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `numero_client` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Type de chambre choisi',
  `person` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_chambre`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_chambre`, `hôtel`, `nom_client`, `prenom_client`, `adresse_client`, `numero_client`, `date_arrivee`, `date_depart`, `room`, `person`, `created_at`) VALUES
(1, 'Cascade palace hôtel', 'dzidziwu', 'dylan omar', 'dzidziwudylanomar@gmail.com', '+226 52 87 50 4', '2024-06-20', '2024-06-20', 'chambre_superieure', 0, '2024-06-19 20:02:51'),
(7, 'Cascade palace hôtel', 'dzidziw', 'dylan', 'dzidziwumar@gmail.com', '+226 7686886976', '2024-07-06', '2024-08-10', 'chambre_superieure', 0, '2024-06-19 20:02:51'),
(8, 'tout baisé hotel', 'gb', 'gigi', 'a@gmail.com', '66666666', '2024-06-19', '2024-06-27', 'suite', 0, '2024-06-19 20:02:51'),
(9, 'Cascade palace hôtel', 'dzidziwu', 'oooo', 'dzidar@gmail.com', '+226 7686886976', '2024-06-21', '2024-06-29', 'chambre_superieure', 0, '2024-06-19 20:02:51'),
(10, 'tout baisé hotel', 'gb', 'gigi', 'a@gmail.com', '66666666', '2024-06-20', '2024-06-30', 'chambre_standard', 7, '2024-06-19 20:03:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
