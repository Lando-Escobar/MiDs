-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 oct. 2024 à 05:49
-- Version du serveur : 8.3.0
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mids`
--

-- --------------------------------------------------------

--
-- Structure de la table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `code_Districts` varchar(10) NOT NULL,
  `Nom_District` varchar(100) DEFAULT NULL,
  `Population_District` int DEFAULT NULL,
  `Nombre_Commune` varchar(50) DEFAULT NULL,
  `Nombre_Fokotany` varchar(50) DEFAULT NULL,
  `cdregion` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`code_Districts`),
  KEY `cdregion` (`cdregion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `district`
--

INSERT INTO `district` (`code_Districts`, `Nom_District`, `Population_District`, `Nombre_Commune`, `Nombre_Fokotany`, `cdregion`) VALUES
('DIS001', 'Antananarivo Atsimondrano', 500000, '18', '120', 'REG001'),
('DIS002', 'Antananarivo Avaradrano', 450000, '16', '110', 'REG001'),
('DIS003', 'Toamasina I', 280000, '20', '150', 'REG002'),
('DIS004', 'Mahajanga I', 220000, '12', '80', 'REG003'),
('DIS005', 'Antsirabe I', 600000, '15', '140', 'REG008'),
('DIS006', 'Fianarantsoa I', 550000, '13', '100', 'REG006'),
('DIS007', 'Ambilobe', 350000, '10', '75', 'REG005'),
('DIS008', 'Morondava', 420000, '8', '60', 'REG009'),
('DIS009', 'Ambanja', 300000, '14', '95', 'REG005'),
('DIS010', 'Toliara I', 700000, '11', '85', 'REG016');

-- --------------------------------------------------------

--
-- Structure de la table `infrastructure`
--

DROP TABLE IF EXISTS `infrastructure`;
CREATE TABLE IF NOT EXISTS `infrastructure` (
  `IDInfrastructure` int NOT NULL AUTO_INCREMENT,
  `TypeInfrastructure` text,
  `code_Districts` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IDInfrastructure`),
  KEY `code_Districts` (`code_Districts`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `population`
--

DROP TABLE IF EXISTS `population`;
CREATE TABLE IF NOT EXISTS `population` (
  `IdPopulation` int NOT NULL AUTO_INCREMENT,
  `NombreHabitants` int DEFAULT NULL,
  `TauxPauvrete` float DEFAULT NULL,
  `CodeDistricts` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IdPopulation`),
  KEY `CodeDistricts` (`CodeDistricts`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `population`
--

INSERT INTO `population` (`IdPopulation`, `NombreHabitants`, `TauxPauvrete`, `CodeDistricts`) VALUES
(1, 500000, 30.5, 'DIS001'),
(2, 450000, 25, 'DIS002'),
(3, 280000, 40, 'DIS003'),
(4, 220000, 35, 'DIS004'),
(5, 600000, 28, 'DIS005'),
(6, 550000, 32, 'DIS006'),
(7, 350000, 20, 'DIS007'),
(8, 420000, 45, 'DIS008'),
(9, 300000, 38, 'DIS009'),
(10, 700000, 22, 'DIS010');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `cdregion` varchar(10) NOT NULL,
  `Nom_region` varchar(100) DEFAULT NULL,
  `Superficie` float DEFAULT NULL,
  `Population_Totale` int DEFAULT NULL,
  `Nombre_Districts` int DEFAULT NULL,
  PRIMARY KEY (`cdregion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`cdregion`, `Nom_region`, `Superficie`, `Population_Totale`, `Nombre_Districts`) VALUES
('REG01', 'ANALAMANGA', 17448, 3618128, 8),
('REG02', 'VAKINANKARATRA', 19098, 2072840, 7),
('REG008', 'Atsinanana', 23200, 1900000, 7),
('REG003', 'Boeny', 33500.3, 800000, 4),
('REG004', 'Betsiboka', 30800.2, 450000, 3),
('REG005', 'Diana', 20500.5, 1200000, 4),
('REG006', 'Haute Matsiatra', 21300.1, 1300000, 5),
('REG007', 'Itasy', 6730.4, 900000, 3),
('REG009', 'Menabe', 46200.2, 650000, 5),
('REG010', 'Sava', 25200.9, 1100000, 5),
('REG011', 'Analanjirofo', 22300.5, 1150000, 5),
('REG012', 'Alaotra Mangoro', 31600.1, 1350000, 6),
('REG013', 'Amoroni_Mania', 16400.8, 750000, 3),
('REG014', 'Androy', 19500.2, 650000, 4),
('REG015', 'Anosy', 25500.7, 900000, 4),
('REG016', 'Atsimo Andrefana', 39800.3, 1400000, 9),
('REG017', 'Atsimo Atsinanana', 26500.6, 950000, 4),
('REG018', 'Bongolava', 19300.4, 550000, 2),
('REG019', 'Ihorombe', 26000, 350000, 3),
('REG020', 'Melaky', 38400.9, 320000, 4),
('REG021', 'Sofia', 50500.7, 1200000, 7),
('REG022', 'Vatovavy Fitovinany', 23100.3, 1000000, 6),
('REG023', 'Ihorombe', 26000.5, 370000, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
