-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 16 oct. 2024 à 12:28
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ministere`
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
('DIS010', 'Toliara I', 700000, '11', '85', 'REG016'),
('DIS011', 'ANDRAMASINA', 161197, '12', '135', 'REG001'),
('DIS012', 'ANJOZOROBE', 167839, '18', '175', 'REG001'),
('DIS013', 'AMBOHIDRATRIMO', 378099, '25', '319', 'REG001'),
('DIS014', 'MANJAKANDRIANA', 209695, '25', '310', 'REG001'),
('DIS015', 'ATANANARIVO RENIVOHITRA', 1230915, '1', '192', 'REG001'),
('DIS016', 'TOAMASINA II', 237640, '17', '164', 'REG002'),
('DIS017', 'BRICKAVILLE', 190636, '18', '180', 'REG002'),
('DIS018', 'VATOMANDRY', 174958, '19', '174', 'REG002'),
('DIS019', 'MAHONORO', 257174, '11', '193', 'REG002'),
('DIS021', 'MAHAJANGA II', 112963, '9', '75', 'REG003'),
('DIS022', 'AMBATOBOENY', 287731, '12', '137', 'REG003'),
('DIS023', 'MAROVOAY', 298820, '13', '147', 'REG003'),
('DIS024', 'SOALALA', 106134, '4', '59', 'REG003'),
('DIS025', 'MITSIPO', 135552, '7', '135', 'REG003'),
('DIS026', 'MAEVATANANA', 10410, '19', '169', 'REG004'),
('DIS027', 'TSARATANANA', 13453, '13', '170', 'REG004'),
('DIS028', 'KANDREHO', 6162, '7', '21', 'REG004'),
('DIS029', 'ATSIRANANA I', 73491, '21', '124', 'REG005'),
('DIS031', 'ATSIRANANA II', 71416, '21', '124', 'REG005'),
('DIS032', 'NOSY BE', 36636, '1', '32', 'REG005'),
('DIS033', 'AMBANJA', 33433, '23', '177', 'REG005'),
('DIS034', 'AMBILOBE', 56000, '15', '161', 'REG005'),
('DIS036', 'AMBALAVAO', 30000, '17', '160', 'REG006'),
('DIS037', 'FIANARATSOA I', 191776, '1', '50', 'REG006'),
('DIS038', 'AMBOHIMASOA', 7986, '18', '158', 'REG006'),
('DIS039', 'IKALAMAVONY', 125327, '8', '60', 'REG006'),
('DIS040', 'VOHIBAO', 196343, '14', '145', 'REG006'),
('DIS041', 'ISANDRA', 129461, '11', '103', 'REG006'),
('DIS042', 'LALANGINA', 169568, '13', '11', 'REG006'),
('DIS043', 'ARIVOMIMAMO', 260261, '22', '286', 'REG007'),
('DIS044', 'MIARINARIVO', 181218, '14', '134', 'REG007'),
('DIS045', 'SOAVINANDRIANA', 247600, '15', '135', 'REG007'),
('DIS047', 'ATSIRABEII', 333279, '20', '204', 'REG008'),
('DIS048', 'AMBATOLAMPY', 25000, '18', '162', 'REG008'),
('DIS049', 'BETAFO', 301671, '18', '152', 'REG008'),
('DIS050', 'FARATSIHO', 165327, '9', '97', 'REG008'),
('DIS051', 'MANDOTO', 37000, '8', '75', 'REG008'),
('DIS052', 'BELO SUR TSIRIBIHINA', 187408, '14', '100', 'REG009'),
('DIS053', 'MAHABO', 157104, '11', '138', 'REG009'),
('DIS054', 'MANJO', 34230, '6', '70', 'REG009'),
('DIS055', 'MIANDRIVAZO', 134336, '15', '137', 'REG009'),
('DIS056', 'ANDAPA', 195077, '18', '129', 'REG010'),
('DIS057', 'ANTOLOHA', 67888, '16', '182', 'REG010'),
('DIS058', 'SAMBAVA', 84039, '26', '339', 'REG010'),
('DIS059', 'VOHEMARA', 15000, '19', '153', 'REG010'),
('DIS060', 'FENERIVO -EST', 277310, '12', '211', 'REG011'),
('DIS061', 'MANANARA', 261784, '14', '207', 'REG011'),
('DIS062', 'MAROANTSETRA', 25000, '18', '161', 'REG011'),
('DIS063', 'SAINTE MARIE', 33456, '1', '17', 'REG011'),
('DIS064', 'SOANERANA IVONGO', 29998, '8', '105', 'REG011'),
('DIS065', 'VAVATENINA', 30000, '10', '811', 'REG011'),
('DIS066', 'AMBATONDRAZAKA', 354007, '20', '174', 'REG012'),
('DIS067', 'AMPARAFARAVOLA', 51519, '20', '216', 'REG012'),
('DIS068', 'ANDILAMENA', 21000, '8', '59', 'REG012'),
('DIS069', 'ANOSIBE AN ANALA', 26365, '10', '96', 'REG012'),
('DIS070', 'AMBOSITRA', 194000, '13', '153', 'REG013'),
('DISO71', 'AMBATOFINADRAHANA', 114000, '17', '121', 'REG013'),
('DISO73', 'FANDRIANA', 152000, '13', '153', 'REG013'),
('DISO72', 'MANADRIANA', 97000, '15', '95', 'REG013'),
('DISO74', 'AMBOVOMBE -ANDROY', 379000, '22', '236', 'REG014'),
('DISO75', 'BEKILY', 180000, '19', '144', 'REG014'),
('DISO76', 'BELOHA', 139000, '13', '97', 'REG014'),
('DISO77', 'TSIHOMBE', 165000, '16', '151', 'REG014'),
('DISO78', 'ANDROY', 863000, '70', '628', 'REG014'),
('DISO79', 'TOLAGNARO', 206000, '20', '215', 'REG015'),
('DISO80', 'AMBOASARY SUD', 180000, '18', '180', 'REG015'),
('DISO81', 'BETROKA', 210000, '23', '241', 'REG015'),
('DISO82', 'TOLIARAII', 230000, '23', '142', 'REG016'),
('DISO83', 'BETIOKY ATSIMO', 220000, '23', '261', 'REG016'),
('DISO84', 'MOROMBE', 120000, '11', '98', 'REG016'),
('DISO85', 'SAKARAHA', 115000, '12', '105', 'REG016'),
('DISO86', 'AMPANIHY OEUST', 200000, '17', '213', 'REG016'),
('DISO87', 'BENENITRA', 30000, '3', '30', 'REG016'),
('DISO88', 'FARAFANGANA', 280000, '30', '290', 'REG017'),
('DISO89', 'VANGAINDRANO', 255000, '21', '248', 'REG017'),
('DISO90', 'VONDROZO', 180000, '17', '152', 'REG017'),
('DISO91', 'BEFOTAKA', 110000, '12', '92', 'REG017'),
('DISO92', 'MIDONGY ATSIMO', 110000, '10', '87', 'REG017'),
('DISO93', 'TSIROANOMANDIDI', 263000, '18', '236', 'REG018'),
('DISO94', 'FENOARIVO BE', 105000, '9', '97', 'REG018'),
('DISO95', 'IHOSY', 250000, '13', '147', 'REG019'),
('DISO97', 'BETIOKY ATSIMO', 130000, '11', '108', 'REG019'),
('DISO98', 'BEROROHA', 95000, '10', '92', 'REG019'),
('DISO99', 'TOLIARAII', 140000, '9', '92', 'REG019'),
('DIS100', 'MAINTIRANO', 660000, '9', '69', 'REG020'),
('DIS101', 'MORONDAVA', 135000, '13', '140', 'REG020'),
('DIS102', 'BELO SUR MER', 30000, '6', '56', 'REG020'),
('DIS103', 'MANJA', 40000, '9', '77', 'REG020'),
('DIS104', 'ANTSOHIHY', 130000, '19', '185', 'REG021'),
('DIS105', 'BEALANANA', 90000, '10', '90', 'REG021'),
('DIS106', 'MANDRITSARA', 115000, '11', '115', 'REG021'),
('DIS107', 'MAMPIKONY', 70000, '8', '80', 'REG021'),
('DIS108', 'PORT- BERGE', 30000, '4', '30', 'REG021'),
('DIS109', 'MANAKARA', 150000, '14', '101', 'REG022'),
('DIS110', 'VOHIPENO', 145000, '12', '106', 'REG022'),
('DIS111', 'IKONGO', 80000, '13', '112', 'REG022'),
('DIS112', 'FARAFANGANA', 150000, '13', '112', 'REG022');

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
