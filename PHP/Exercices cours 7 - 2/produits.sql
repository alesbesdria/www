-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 26 juil. 2024 à 10:52
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `viaformation_template`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `ID` int(10) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `Nom` varchar(120) NOT NULL,
  `Description` text NOT NULL,
  `Stock` int(5) NOT NULL,
  `Prix` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`ID`, `reference`, `Nom`, `Description`, `Stock`, `Prix`) VALUES
(1, 'REF-0001', 'Chaise', 'Description de Chaise', 13, 74.89),
(2, 'REF-0002', 'Table', 'Description de Table', 27, 18.12),
(3, 'REF-0003', 'Lampe', 'Description de Lampe', 2, 61.26),
(4, 'REF-0004', 'Canapé', 'Description de Canapé', 94, 91.81),
(5, 'REF-0005', 'Armoire', 'Description de Armoire', 71, 84.03),
(6, 'REF-0006', 'Lit', 'Description de Lit', 1, 61.27),
(7, 'REF-0007', 'Bureau', 'Description de Bureau', 95, 98.89),
(8, 'REF-0008', 'Étagère', 'Description de Étagère', 2, 18.50),
(9, 'REF-0009', 'Tabouret', 'Description de Tabouret', 80, 52.50),
(10, 'REF-0010', 'Commode', 'Description de Commode', 15, 22.07),
(11, 'REF-0011', '\r\nRéfrigérateur', 'Description de \r\nRéfrigérateur', 60, 37.86),
(12, 'REF-0012', 'Four', 'Description de Four', 4, 11.62),
(13, 'REF-0013', 'Micro-ondes', 'Description de Micro-ondes', 40, 71.09),
(14, 'REF-0014', 'Lave-vaisselle', 'Description de Lave-vaisselle', 29, 37.15),
(15, 'REF-0015', 'Lave-linge', 'Description de Lave-linge', 92, 57.07),
(16, 'REF-0016', 'Télévision', 'Description de Télévision', 1, 40.96),
(17, 'REF-0017', 'Ordinateur', 'Description de Ordinateur', 94, 55.65),
(18, 'REF-0018', 'Imprimante', 'Description de Imprimante', 88, 79.63),
(19, 'REF-0019', '\r\nSmartphone', 'Description de \r\nSmartphone', 27, 3.20),
(20, 'REF-0020', 'Tablette', 'Description de Tablette', 28, 35.07),
(21, 'REF-0021', 'Casque Audio', 'Description de Casque Audio', 85, 28.64),
(22, 'REF-0022', 'Enceinte Bluetooth', 'Description de Enceinte Bluetooth', 80, 19.45),
(23, 'REF-0023', 'Caméra', 'Description de Caméra', 51, 2.75),
(24, 'REF-0024', 'Montre Connectée', 'Description de Montre Connectée', 54, 68.15),
(25, 'REF-0025', 'Climatiseur', 'Description de Climatiseur', 72, 61.05),
(26, 'REF-0026', '\r\nVentilateur', 'Description de \r\nVentilateur', 83, 37.65),
(27, 'REF-0027', 'Radiateur', 'Description de Radiateur', 33, 56.94),
(28, 'REF-0028', 'Aspirateur', 'Description de Aspirateur', 80, 33.99),
(29, 'REF-0029', 'Machine à Café', 'Description de Machine à Café', 24, 24.30),
(30, 'REF-0030', 'Grille-pain', 'Description de Grille-pain', 43, 46.73),
(31, 'REF-0031', 'Bouilloire', 'Description de Bouilloire', 99, 60.30),
(32, 'REF-0032', 'Mixeur', 'Description de Mixeur', 98, 16.12),
(33, 'REF-0033', 'Robot de Cuisine', 'Description de Robot de Cuisine', 79, 54.57),
(34, 'REF-0034', '\r\nFer à Repasser', 'Description de \r\nFer à Repasser', 28, 82.67),
(35, 'REF-0035', 'Sèche-cheveux', 'Description de Sèche-cheveux', 22, 70.67),
(36, 'REF-0036', 'Tondeuse', 'Description de Tondeuse', 79, 89.76),
(37, 'REF-0037', 'Perceuse', 'Description de Perceuse', 5, 60.41),
(38, 'REF-0038', 'Marteau', 'Description de Marteau', 81, 30.85),
(39, 'REF-0039', 'Scie', 'Description de Scie', 4, 33.52),
(40, 'REF-0040', 'Pince', 'Description de Pince', 49, 50.14),
(41, 'REF-0041', 'Tournevis', 'Description de Tournevis', 97, 41.93),
(42, 'REF-0042', 'Clé à Molette', 'Description de Clé à Molette', 11, 36.47),
(43, 'REF-0043', '\r\nVoiture Télécommandée', 'Description de \r\nVoiture Télécommandée', 42, 6.55),
(44, 'REF-0044', 'Drone', 'Description de Drone', 0, 87.26),
(45, 'REF-0045', 'Console de Jeu', 'Description de Console de Jeu', 29, 90.00),
(46, 'REF-0046', 'Jeux de Société', 'Description de Jeux de Société', 56, 15.64),
(47, 'REF-0047', 'Poupée', 'Description de Poupée', 4, 78.12),
(48, 'REF-0048', 'Lego', 'Description de Lego', 72, 34.60),
(49, 'REF-0049', 'Puzzle', 'Description de Puzzle', 49, 45.30),
(50, 'REF-0050', 'Peluches', 'Description de Peluches', 74, 40.21),
(51, 'REF-0051', '\r\nCrayons de Couleur', 'Description de \r\nCrayons de Couleur', 72, 47.34),
(52, 'REF-0052', 'Peinture', 'Description de Peinture', 13, 28.52),
(53, 'REF-0053', 'Bloc-notes', 'Description de Bloc-notes', 97, 6.93),
(54, 'REF-0054', 'Cahier', 'Description de Cahier', 36, 65.93),
(55, 'REF-0055', 'Stylo', 'Description de Stylo', 15, 81.38),
(56, 'REF-0056', 'Marqueur', 'Description de Marqueur', 56, 43.81),
(57, 'REF-0057', 'Feutre', 'Description de Feutre', 43, 90.91),
(58, 'REF-0058', 'Sac à Dos', 'Description de Sac à Dos', 18, 23.99),
(59, 'REF-0059', 'Valise', 'Description de Valise', 59, 28.63),
(60, 'REF-0060', '\r\nTrousse', 'Description de \r\nTrousse', 60, 19.02),
(61, 'REF-0061', 'Agenda', 'Description de Agenda', 9, 94.72),
(62, 'REF-0062', 'Livre', 'Description de Livre', 39, 19.42),
(63, 'REF-0063', 'Magazine', 'Description de Magazine', 72, 7.55),
(64, 'REF-0064', 'DVD', 'Description de DVD', 15, 59.70),
(65, 'REF-0065', 'Blu-ray', 'Description de Blu-ray', 46, 57.28),
(66, 'REF-0066', 'Vélo', 'Description de Vélo', 41, 42.01),
(67, 'REF-0067', 'Trotinette', 'Description de Trotinette', 79, 73.74),
(68, 'REF-0068', 'Roller', 'Description de Roller', 26, 13.87),
(69, 'REF-0069', 'Skateboard', 'Description de Skateboard', 85, 90.82),
(70, 'REF-0070', '\r\nRaquette de Tennis', 'Description de \r\nRaquette de Tennis', 92, 91.75),
(71, 'REF-0071', 'Balle de Football', 'Description de Balle de Football', 77, 16.83),
(72, 'REF-0072', 'Basket-ball', 'Description de Basket-ball', 46, 85.12),
(73, 'REF-0073', 'Veste', 'Description de Veste', 81, 56.76),
(74, 'REF-0074', 'T-shirt', 'Description de T-shirt', 33, 3.44),
(75, 'REF-0075', 'Jean', 'Description de Jean', 10, 45.58),
(76, 'REF-0076', 'Pantalon', 'Description de Pantalon', 91, 25.96),
(77, 'REF-0077', 'Robe', 'Description de Robe', 49, 73.98),
(78, 'REF-0078', 'Jupe', 'Description de Jupe', 16, 62.96),
(79, 'REF-0079', '\r\nPull', 'Description de \r\nPull', 61, 21.44),
(80, 'REF-0080', 'Chemise', 'Description de Chemise', 18, 31.80),
(81, 'REF-0081', 'Blouse', 'Description de Blouse', 98, 2.23),
(82, 'REF-0082', 'Manteau', 'Description de Manteau', 9, 47.08),
(83, 'REF-0083', 'Chaussures', 'Description de Chaussures', 0, 65.51),
(84, 'REF-0084', 'Bottes', 'Description de Bottes', 20, 11.89),
(85, 'REF-0085', 'Sandales', 'Description de Sandales', 91, 27.29),
(86, 'REF-0086', 'Lunettes de Soleil', 'Description de Lunettes de Soleil', 56, 2.46),
(87, 'REF-0087', 'Montre', 'Description de Montre', 39, 92.15),
(88, 'REF-0088', '\r\nCollier', 'Description de \r\nCollier', 38, 19.75),
(89, 'REF-0089', 'Bracelet', 'Description de Bracelet', 78, 36.89),
(90, 'REF-0090', 'Bague', 'Description de Bague', 44, 14.07),
(91, 'REF-0091', 'Boucles d\'Oreilles', 'Description de Boucles d\'Oreilles', 32, 26.39),
(92, 'REF-0092', 'Ceinture', 'Description de Ceinture', 28, 65.82),
(93, 'REF-0093', 'Chapeau', 'Description de Chapeau', 39, 4.06),
(94, 'REF-0094', 'Casquette', 'Description de Casquette', 96, 75.73),
(95, 'REF-0095', 'Gants', 'Description de Gants', 83, 93.41),
(96, 'REF-0096', 'Écharpe', 'Description de Écharpe', 12, 84.15),
(97, 'REF-0097', '', 'Description de ', 79, 49.26),
(98, 'REF-0098', 'Chaise', 'Description de Chaise', 2, 69.56),
(99, 'REF-0099', 'Table', 'Description de Table', 34, 69.21),
(100, 'REF-0100', 'Lampe', 'Description de Lampe', 36, 79.97),
(101, 'REF-0101', 'Canapé', 'Description de Canapé', 84, 87.51),
(102, 'REF-0102', 'Armoire', 'Description de Armoire', 78, 34.02),
(103, 'REF-0103', 'Lit', 'Description de Lit', 29, 49.75),
(104, 'REF-0104', 'Bureau', 'Description de Bureau', 55, 30.10),
(105, 'REF-0105', 'Étagère', 'Description de Étagère', 80, 15.20),
(106, 'REF-0106', 'Tabouret', 'Description de Tabouret', 30, 8.79),
(107, 'REF-0107', 'Commode', 'Description de Commode', 48, 21.20),
(108, 'REF-0108', '\r\nRéfrigérateur', 'Description de \r\nRéfrigérateur', 54, 14.70),
(109, 'REF-0109', 'Four', 'Description de Four', 3, 79.43),
(110, 'REF-0110', 'Micro-ondes', 'Description de Micro-ondes', 80, 67.99),
(111, 'REF-0111', 'Lave-vaisselle', 'Description de Lave-vaisselle', 93, 67.82),
(112, 'REF-0112', 'Lave-linge', 'Description de Lave-linge', 53, 67.64),
(113, 'REF-0113', 'Télévision', 'Description de Télévision', 72, 65.78),
(114, 'REF-0114', 'Ordinateur', 'Description de Ordinateur', 5, 32.04),
(115, 'REF-0115', 'Imprimante', 'Description de Imprimante', 39, 7.67),
(116, 'REF-0116', '\r\nSmartphone', 'Description de \r\nSmartphone', 13, 48.48),
(117, 'REF-0117', 'Tablette', 'Description de Tablette', 96, 43.06),
(118, 'REF-0118', 'Casque Audio', 'Description de Casque Audio', 19, 72.88),
(119, 'REF-0119', 'Enceinte Bluetooth', 'Description de Enceinte Bluetooth', 0, 88.24),
(120, 'REF-0120', 'Caméra', 'Description de Caméra', 34, 11.65),
(121, 'REF-0121', 'Montre Connectée', 'Description de Montre Connectée', 49, 18.09),
(122, 'REF-0122', 'Climatiseur', 'Description de Climatiseur', 36, 29.82),
(123, 'REF-0123', '\r\nVentilateur', 'Description de \r\nVentilateur', 36, 94.90),
(124, 'REF-0124', 'Radiateur', 'Description de Radiateur', 61, 25.62),
(125, 'REF-0125', 'Aspirateur', 'Description de Aspirateur', 39, 23.68),
(126, 'REF-0126', 'Machine à Café', 'Description de Machine à Café', 95, 10.27),
(127, 'REF-0127', 'Grille-pain', 'Description de Grille-pain', 59, 73.07),
(128, 'REF-0128', 'Bouilloire', 'Description de Bouilloire', 80, 86.94),
(129, 'REF-0129', 'Mixeur', 'Description de Mixeur', 88, 85.14),
(130, 'REF-0130', 'Robot de Cuisine', 'Description de Robot de Cuisine', 55, 26.26),
(131, 'REF-0131', '\r\nFer à Repasser', 'Description de \r\nFer à Repasser', 59, 23.71),
(132, 'REF-0132', 'Sèche-cheveux', 'Description de Sèche-cheveux', 34, 5.06),
(133, 'REF-0133', 'Tondeuse', 'Description de Tondeuse', 16, 73.77),
(134, 'REF-0134', 'Perceuse', 'Description de Perceuse', 12, 47.05),
(135, 'REF-0135', 'Marteau', 'Description de Marteau', 91, 21.13),
(136, 'REF-0136', 'Scie', 'Description de Scie', 25, 68.89),
(137, 'REF-0137', 'Pince', 'Description de Pince', 62, 9.80),
(138, 'REF-0138', 'Tournevis', 'Description de Tournevis', 56, 57.22),
(139, 'REF-0139', 'Clé à Molette', 'Description de Clé à Molette', 11, 89.89),
(140, 'REF-0140', '\r\nVoiture Télécommandée', 'Description de \r\nVoiture Télécommandée', 9, 83.92),
(141, 'REF-0141', 'Drone', 'Description de Drone', 84, 76.41),
(142, 'REF-0142', 'Console de Jeu', 'Description de Console de Jeu', 22, 87.64),
(143, 'REF-0143', 'Jeux de Société', 'Description de Jeux de Société', 65, 68.42),
(144, 'REF-0144', 'Poupée', 'Description de Poupée', 40, 2.28),
(145, 'REF-0145', 'Lego', 'Description de Lego', 84, 18.43),
(146, 'REF-0146', 'Puzzle', 'Description de Puzzle', 34, 20.62),
(147, 'REF-0147', 'Peluches', 'Description de Peluches', 94, 16.96),
(148, 'REF-0148', '\r\nCrayons de Couleur', 'Description de \r\nCrayons de Couleur', 94, 27.62),
(149, 'REF-0149', 'Peinture', 'Description de Peinture', 48, 63.22),
(150, 'REF-0150', 'Bloc-notes', 'Description de Bloc-notes', 65, 43.63);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
