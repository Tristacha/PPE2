-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 04 Mars 2019 à 08:43
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ppe`
--

-- --------------------------------------------------------

--
-- Structure de la table `bateau`
--

CREATE TABLE IF NOT EXISTS `bateau` (
  `id_bateau` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Bateau` varchar(50) NOT NULL,
  PRIMARY KEY (`id_bateau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `bateau`
--

INSERT INTO `bateau` (`id_bateau`, `Nom_Bateau`) VALUES
(1, 'Antonio');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `lettre` char(5) NOT NULL,
  `libelle_cat` varchar(50) NOT NULL,
  PRIMARY KEY (`lettre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `Fidelisation` int(11) NOT NULL,
  `MotDePasse` varchar(50) NOT NULL,
  `CodePostal` int(11) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `enregistrer`
--

CREATE TABLE IF NOT EXISTS `enregistrer` (
  `num_type` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  PRIMARY KEY (`num_type`,`num`),
  KEY `ENREGISTRER_Reservation0_FK` (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `liaison`
--

CREATE TABLE IF NOT EXISTS `liaison` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `Distance` float NOT NULL,
  `id_secteur` int(11) NOT NULL,
  `id_port_dep` int(11) NOT NULL,
  `id_port_arr` int(11) NOT NULL,
  PRIMARY KEY (`code`),
  KEY `Liaison_Secteur_FK` (`id_secteur`),
  KEY `Liaison_Port0_FK` (`id_port_dep`),
  KEY `Liaison_Port1_FK` (`id_port_arr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `liaison`
--

INSERT INTO `liaison` (`code`, `Distance`, `id_secteur`, `id_port_dep`, `id_port_arr`) VALUES
(1, 3625, 1, 1, 2),
(2, 3625, 1, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `dateDeb` date NOT NULL,
  `dateFin` date NOT NULL,
  PRIMARY KEY (`dateDeb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `periode`
--

INSERT INTO `periode` (`dateDeb`, `dateFin`) VALUES
('2019-01-01', '2019-05-01'),
('2019-05-02', '2019-09-01'),
('2019-09-02', '2019-12-31');

-- --------------------------------------------------------

--
-- Structure de la table `port`
--

CREATE TABLE IF NOT EXISTS `port` (
  `id_port` int(11) NOT NULL AUTO_INCREMENT,
  `nom_port` varchar(50) NOT NULL,
  PRIMARY KEY (`id_port`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Contenu de la table `port`
--

INSERT INTO `port` (`id_port`, `nom_port`) VALUES
(1, 'Paris'),
(2, 'New York'),
(3, 'Japon'),
(4, 'Chine'),
(11, 'tysduysid'),
(12, 'ghdjcik'),
(13, 'jhdygeygd'),
(14, 'juzgduag'),
(15, 'jhdygeygd'),
(16, 'juzgduag'),
(17, 'fizerhf'),
(18, 'fjhzgf'),
(19, 'fzheg'),
(20, 'kzhfgzh'),
(21, 'ljkfvbje'),
(22, 'lkjfbvlejf'),
(23, 'kjfgbjh'),
(24, 'ldkfjgk'),
(25, 'kjfgbjh'),
(26, 'ldkfjgk'),
(27, 'jejrhgh'),
(28, 'rjhaerh'),
(29, 'jejrhgh'),
(30, 'rjhaerh'),
(31, 'jyhdfgyezr'),
(32, 'jkhrgfeyrfg'),
(33, 'iutyf_(tif'),
(34, '(_Ã¨tÃ§_(tÃ§_'),
(35, 'iutyf_(tif'),
(36, '(_Ã¨tÃ§_(tÃ§_'),
(37, 'zkuyfguze'),
(38, 'izefgizuef'),
(39, 'ekruheurhg'),
(40, 'ergherhg'),
(41, 'ekruheurhg'),
(42, 'ergherhg'),
(43, 'srthsrthrt'),
(44, 'sthsethset'),
(45, 'srthsrthrt'),
(46, 'sthsethset'),
(47, 'srthsrthrt'),
(48, 'sthsethset'),
(49, 'srthsrthrt'),
(50, 'sthsethset'),
(51, 'srthsrthrt'),
(52, 'sthsethset'),
(53, 'srthsrthrt'),
(54, 'sthsethset'),
(55, 'testbb'),
(56, 'testaa'),
(57, 'testbb'),
(58, 'testaa'),
(59, 'testbb'),
(60, 'testaa'),
(61, 'France'),
(62, 'Italie'),
(63, 'New York'),
(64, 'Los Angeles');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Re` varchar(50) NOT NULL,
  `CodePostal_Re` int(11) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `num_tra` int(11) NOT NULL,
  PRIMARY KEY (`num`),
  KEY `Reservation_Traversee_FK` (`num_tra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE IF NOT EXISTS `secteur` (
  `id_secteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_secteur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_secteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `secteur`
--

INSERT INTO `secteur` (`id_secteur`, `nom_secteur`) VALUES
(1, 'ATLANTIQUE'),
(2, 'PACIFIQUE'),
(6, 'JKFDJHDD'),
(7, 'JDJKEDG'),
(8, 'JDJKEDG'),
(9, 'IUFVE'),
(10, 'UFYEGJFYU'),
(11, 'UFHUEFV'),
(12, 'OIRUUFUY'),
(13, 'OIRUUFUY'),
(14, 'OIUYYR'),
(15, 'OIUYYR'),
(16, 'JUYGFH'),
(17, '(T(RRIU'),
(18, '(T(RRIU'),
(19, 'ZIHFGZYEGFYZ'),
(20, 'KEJFGHIUERH'),
(21, 'KEJFGHIUERH'),
(22, 'FTGHSRTH'),
(23, 'FTGHSRTH'),
(24, 'FTGHSRTH'),
(25, 'FTGHSRTH'),
(26, 'FTGHSRTH'),
(27, 'FTGHSRTH'),
(28, 'TEST'),
(29, 'TEST'),
(30, 'TEST'),
(31, 'EUROPE'),
(32, 'AMERIQUE');

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE IF NOT EXISTS `trajet` (
  `code` int(255) NOT NULL,
  `id_sect` int(255) NOT NULL,
  `distance` int(255) NOT NULL,
  `id_porta` int(255) NOT NULL,
  `id_portd` int(255) NOT NULL,
  `nom_trajet` varchar(255) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `trajet`
--

INSERT INTO `trajet` (`code`, `id_sect`, `distance`, `id_porta`, `id_portd`, `nom_trajet`) VALUES
(25, 31, 1558, 62, 61, 'France-Italie'),
(47, 28, 1478, 56, 55, 'testbb-testaa'),
(69, 32, 5625, 64, 2, 'New York-Los Angeles');

-- --------------------------------------------------------

--
-- Structure de la table `traversee`
--

CREATE TABLE IF NOT EXISTS `traversee` (
  `num_tra` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `heure` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `id_bateau` int(11) NOT NULL,
  PRIMARY KEY (`num_tra`),
  KEY `Traversee_Liaison_FK` (`code`),
  KEY `Traversee_Bateau0_FK` (`id_bateau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `traversee`
--

INSERT INTO `traversee` (`num_tra`, `date`, `heure`, `code`, `id_bateau`) VALUES
(1, '2019-12-10', '12h00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `num_type` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_type` varchar(50) NOT NULL,
  `lettre` char(5) NOT NULL,
  PRIMARY KEY (`num_type`),
  KEY `Type_CATEGORIE_FK` (`lettre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `enregistrer`
--
ALTER TABLE `enregistrer`
  ADD CONSTRAINT `ENREGISTRER_Reservation0_FK` FOREIGN KEY (`num`) REFERENCES `reservation` (`num`),
  ADD CONSTRAINT `ENREGISTRER_Type_FK` FOREIGN KEY (`num_type`) REFERENCES `type` (`num_type`);

--
-- Contraintes pour la table `liaison`
--
ALTER TABLE `liaison`
  ADD CONSTRAINT `Liaison_Port0_FK` FOREIGN KEY (`id_port_dep`) REFERENCES `port` (`id_port`),
  ADD CONSTRAINT `Liaison_Port1_FK` FOREIGN KEY (`id_port_arr`) REFERENCES `port` (`id_port`),
  ADD CONSTRAINT `Liaison_Secteur_FK` FOREIGN KEY (`id_secteur`) REFERENCES `secteur` (`id_secteur`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `Reservation_Traversee_FK` FOREIGN KEY (`num_tra`) REFERENCES `traversee` (`num_tra`);

--
-- Contraintes pour la table `traversee`
--
ALTER TABLE `traversee`
  ADD CONSTRAINT `Traversee_Bateau0_FK` FOREIGN KEY (`id_bateau`) REFERENCES `bateau` (`id_bateau`),
  ADD CONSTRAINT `Traversee_Liaison_FK` FOREIGN KEY (`code`) REFERENCES `liaison` (`code`);

--
-- Contraintes pour la table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `Type_CATEGORIE_FK` FOREIGN KEY (`lettre`) REFERENCES `categorie` (`lettre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
