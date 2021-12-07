-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 06, 2021 at 04:44 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `annonces`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_fr`
--

CREATE TABLE `department_fr` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `code-departement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_fr`
--

INSERT INTO `department_fr` (`id`, `parent_id`, `name`, `slug`, `code-departement`) VALUES
(1, NULL, 'Ain', 'ain', '1'),
(2, NULL, 'Aisne', 'aisne', '2'),
(3, NULL, 'Allier', 'allier', '3'),
(4, NULL, 'Alpes-de-Haute-Provence', 'alpes-de-haute-provence', '4'),
(5, NULL, 'Hautes-alpes', 'hautes-alpes', '5'),
(6, NULL, 'Alpes-Maritimes', 'alpes-maritimes', '6'),
(7, NULL, 'Ardèche', 'ardèche', '7'),
(8, NULL, 'Ardennes', 'ardennes', '8'),
(10, NULL, 'Aube', 'aube', '10'),
(11, NULL, 'Aude', 'aude', '11'),
(12, NULL, 'Aveyron', 'aveyron', '12'),
(13, NULL, 'Bouches-du-Rhône', 'bouches-du-rhône', '13'),
(14, NULL, 'calvados', 'calvados', '14'),
(15, NULL, 'cantal', 'cantal', '15'),
(16, NULL, 'Charente', 'charente', '16'),
(17, NULL, 'Charente-Maritime', 'charente-mritime', '17'),
(18, NULL, 'Cher', 'cher', '18'),
(19, NULL, 'Corrèze', 'corrèze', '19'),
(20, NULL, 'Corse-du-Sud', 'corse-du-sd', '2A'),
(21, NULL, 'Haute-Corse', 'haute-corse', '2B'),
(22, NULL, 'Côte-d\'Or', 'côte-d_or', '21'),
(23, NULL, 'Côtes-d\'Armor', 'côtes-d_armor', '22'),
(24, NULL, 'Creuse', 'creuse', '23'),
(25, NULL, 'Dordogne', 'dordogne', '24'),
(26, NULL, 'Doubs', 'dubs', '25'),
(27, NULL, 'Drôme', 'drôme', '26'),
(28, NULL, 'Eure', 'eure', '27'),
(29, NULL, 'Eure-et-Loir', 'eure-et-loir', '28'),
(30, NULL, 'Finistère', 'finistère', '29'),
(31, NULL, 'Gard', 'gard', '30'),
(32, NULL, 'Haute-Garonne', 'haute-garonne', '31'),
(33, NULL, 'Gers', 'Gers', '32'),
(34, NULL, 'Gironde', 'gironde', '33'),
(71, NULL, 'Hérault', 'hérault', '34'),
(72, NULL, 'Ille-et-Vilaine', 'ille-et-vilaine', '35'),
(73, NULL, 'Indre', 'indre', '36'),
(74, NULL, 'Indre-et-Loire', 'indre-et-Loire', '37'),
(75, NULL, 'Isère', 'isère', '38'),
(76, NULL, 'Jura', 'jura', '39'),
(77, NULL, 'Landes', 'landes', '40'),
(78, NULL, 'Loir-et-Cher', 'loir-et-cher', '41'),
(79, NULL, 'Loire', 'loire', '42'),
(80, NULL, 'Haute-Loire', 'haute-loire', '43'),
(81, NULL, 'Loire-Atlantique', 'loire-atlantique', '44'),
(82, NULL, 'Loiret', 'loiret', '45'),
(83, NULL, 'Lot', 'lot', '46'),
(84, NULL, 'Lot-et-Garonne', 'lot-et-garonne', '47'),
(85, NULL, 'Lozère', 'lozère', '48'),
(86, NULL, 'Maine-et-Loire', 'maine-et-loire', '49'),
(87, NULL, 'Manche', 'manche', '50'),
(88, NULL, 'Marne', 'marne', '51'),
(89, NULL, 'Haute-Marne', 'haute-marne', '52'),
(90, NULL, 'Mayenne', 'mayenne', '53'),
(91, NULL, 'Meurthe-et-Moselle', 'murthe-et-moselle', '54'),
(92, NULL, 'Meuse', 'meuse', '55'),
(93, NULL, 'Morbihan', 'morbihan', '56'),
(94, NULL, 'Moselle', 'moselle', '57'),
(95, NULL, 'Nièvre', 'nièvre', '58'),
(96, NULL, 'Nord', 'nord', '59'),
(97, NULL, 'Oise', 'oise', '60'),
(98, NULL, 'Orne', 'orne', '61'),
(99, NULL, 'Pas-de-Calais', 'pas-de-calais', '62'),
(100, NULL, 'Puy-de-Dôme', 'puy-de-dôme', '63'),
(101, NULL, 'Pyrénées-Atlantiques', 'pyrénées-atlantiques', '64'),
(102, NULL, 'Hautes-Pyrénées', 'hautes-pyrénées', '65'),
(103, NULL, 'Pyrénées-Orientales', 'pyrénées-orientales', '66'),
(104, NULL, 'Bas-Rhin', 'bas-Rhin', '67'),
(105, NULL, 'Haut-Rhin', 'haut-rhin', '68'),
(106, NULL, 'Rhône', 'rhône', '69'),
(107, NULL, 'Haute-Saône', 'haute-saône', '70'),
(108, NULL, 'Saône-et-Loire', 'saône-et-loire', '71'),
(109, NULL, 'Sarthe', 'sarthe', '72'),
(110, NULL, 'Savoie', 'savoie', '73'),
(111, NULL, 'Haute-Savoie', 'haute-Savoie', '74'),
(112, NULL, '', '', ''),
(113, NULL, 'Paris', 'paris', '75'),
(114, NULL, 'Seine-Maritime', 'seine-maritime', '76'),
(115, NULL, 'Seine-et-Marne', 'seine-et-marne', '77'),
(116, NULL, 'Yvelines', 'yvelines', '78'),
(117, NULL, 'Deux-Sèvres', 'deux-sèvres', '79'),
(118, NULL, 'Somme', 'somme', '80'),
(119, NULL, 'Tarn', 'tarn', '81'),
(120, NULL, 'Tarn-et-Garonne', 'tarn-et-Garonne', '82'),
(121, NULL, 'Var', 'var', '83'),
(122, NULL, 'Vaucluse', 'vaucluse', '84'),
(123, NULL, 'Vendée', 'vendée', '85'),
(124, NULL, 'Vienne', 'vienne', '86'),
(125, NULL, 'Haute-Vienne', 'haute-vienne', '87'),
(126, NULL, 'Vosges', 'vosges', '88'),
(127, NULL, 'Yonne', 'yonne', '89'),
(128, NULL, 'Territoire de Belfort', 'territoire_de_belfort', '90'),
(129, NULL, 'Essonne', 'essonne', '91'),
(130, NULL, 'Hauts-de-Seine', 'hauts-de-seine', '92'),
(131, NULL, 'Seine-Saint-Denis', 'seine-saint-denis', '93'),
(132, NULL, 'Val-de-Marne', 'val-de-Marne', '94'),
(133, NULL, 'Val-d\'Oise', 'val-d_oise', '95'),
(134, NULL, 'Guadeloupe', 'guadeloupe', '971'),
(135, NULL, 'Martinique', 'martinique', '972'),
(136, NULL, 'Guyane', 'guyane', '973'),
(137, NULL, 'La Réunion', 'la_réunion', '974'),
(138, NULL, 'Mayotte', 'mayotte', '976');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_fr`
--
ALTER TABLE `department_fr`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code-departement` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_fr`
--
ALTER TABLE `department_fr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
