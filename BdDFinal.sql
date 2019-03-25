-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 25 Mars 2019 à 09:23
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppe2`
--

-- --------------------------------------------------------

--
-- Structure de la table `bateau`
--

CREATE TABLE `bateau` (
  `id_bateau` int(11) NOT NULL,
  `Nom_Bateau` varchar(50) NOT NULL,
  `Longueur` float DEFAULT NULL,
  `Largeur` float DEFAULT NULL,
  `Vitesse` float DEFAULT NULL,
  `Nb_Equipement` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bateau`
--

INSERT INTO `bateau` (`id_bateau`, `Nom_Bateau`, `Longueur`, `Largeur`, `Vitesse`, `Nb_Equipement`) VALUES
(1, 'Antonio', 12.3, 41, 123, 4),
(2, 'antoine', 45, 22.2, 36, 4),
(3, 'Antonio', 24.6, 25, 178, 2),
(4, 'antoine', 78, 22.5, 48, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `lettre` char(5) NOT NULL,
  `libelle_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`lettre`, `libelle_cat`) VALUES
('A', 'Place');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Fidelisation` int(11) NOT NULL,
  `MotDePasse` varchar(50) NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `DateNaissance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id_client`, `Nom`, `Prenom`, `Mail`, `Telephone`, `Fidelisation`, `MotDePasse`, `CodePostal`, `DateNaissance`) VALUES
(1, 'coquette', 'antoine', 'antoine@gmail.com', 624552588, 0, '92dad2bfb14142c5e591bcd150b40c08da05d072', 59000, '1999-09-17'),
(2, 'gryson', 'alexandre', 'alexandre@gmail.com', 2144684654, 0, '992ee41ec715ba34a247fff044f7daf7a099b7a7', 59000, '1999-01-14'),
(3, 'lope', 'arthur', 'artL@gmail.com', 658954741, 0, 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 74000, '1998-09-22'),
(4, 'ricky', 'rodrigo', 'rickyRo@gmail.com', 658954742, 0, 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', 59600, '1994-12-10');

-- --------------------------------------------------------

--
-- Structure de la table `enregistrer`
--

CREATE TABLE `enregistrer` (
  `num_type` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `montant` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `enregistrer`
--

INSERT INTO `enregistrer` (`num_type`, `num`, `montant`) VALUES
(1, 3, '220');

-- --------------------------------------------------------

--
-- Structure de la table `liaison`
--

CREATE TABLE `liaison` (
  `code` int(11) NOT NULL,
  `Distance` float NOT NULL,
  `id_secteur` int(11) NOT NULL,
  `id_port_dep` int(11) NOT NULL,
  `id_port_arr` int(11) NOT NULL,
  `nom_liaison` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `liaison`
--

INSERT INTO `liaison` (`code`, `Distance`, `id_secteur`, `id_port_dep`, `id_port_arr`, `nom_liaison`) VALUES
(1, 3625, 1, 1, 2, 'Paris-NewYork'),
(2, 3625, 1, 2, 1, 'Marseille-rio'),
(3, 10000, 2, 3, 4, 'null'),
(4, 50000, 1, 4, 2, 'nil');

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(11) NOT NULL,
  `dateDeb` date NOT NULL,
  `dateFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `periode`
--

INSERT INTO `periode` (`id_periode`, `dateDeb`, `dateFin`) VALUES
(1, '2019-01-01', '2019-05-01'),
(2, '2019-05-02', '2019-09-01'),
(3, '2019-09-02', '2019-12-31');

-- --------------------------------------------------------

--
-- Structure de la table `port`
--

CREATE TABLE `port` (
  `id_port` int(11) NOT NULL,
  `nom_port` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `port`
--

INSERT INTO `port` (`id_port`, `nom_port`) VALUES
(1, 'Paris'),
(2, 'New York'),
(3, 'p'),
(4, 'z'),
(28, 'Italie'),
(29, 'France ');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `num` int(11) NOT NULL,
  `CodePostal_Re` int(11) NOT NULL,
  `num_tra` int(11) NOT NULL,
  `date_res` date DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_liaison` int(11) DEFAULT NULL,
  `adresse_facturation` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`num`, `CodePostal_Re`, `num_tra`, `date_res`, `id_client`, `id_liaison`, `adresse_facturation`) VALUES
(3, 59000, 1, '2019-03-16', 1, 1, '48 rue du bas-lièvin'),
(8, 59000, 1, '2019-03-16', 1, 1, '48 rue du bas-liÃ¨vin'),
(9, 59000, 1, '2019-03-16', 1, 1, '48 rue du bas-liÃ¨vin'),
(10, 59000, 1, '2019-03-16', 1, 1, '48 rue du bas-liÃ¨vin'),
(11, 59000, 1, '2019-03-16', 1, 1, '48 rue du bas-liÃ¨vin'),
(12, 59000, 1, '2019-03-16', 1, 1, '48 rue du bas-liÃ¨vin'),
(13, 59000, 1, '2019-03-18', 1, 1, '48 rue du blabla');

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE `secteur` (
  `id_secteur` int(11) NOT NULL,
  `nom_secteur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secteur`
--

INSERT INTO `secteur` (`id_secteur`, `nom_secteur`) VALUES
(1, 'ATLANTIQUE'),
(2, 'PACIFIQUE'),
(15, 'EUROPE');

-- --------------------------------------------------------

--
-- Structure de la table `traversee`
--

CREATE TABLE `traversee` (
  `num_tra` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(50) NOT NULL,
  `code` int(11) NOT NULL,
  `id_bateau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `traversee`
--

INSERT INTO `traversee` (`num_tra`, `date`, `heure`, `code`, `id_bateau`) VALUES
(1, '2019-12-10', '12h00', 1, 1),
(2, '0000-00-00', '10h30', 2, 2),
(3, '2019-02-20', '14h00', 3, 4),
(4, '2019-05-28', '9h00', 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `num_type` int(11) NOT NULL,
  `libelle_type` varchar(50) NOT NULL,
  `lettre` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`num_type`, `libelle_type`, `lettre`) VALUES
(1, 'reservation ', 'A');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bateau`
--
ALTER TABLE `bateau`
  ADD PRIMARY KEY (`id_bateau`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`lettre`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `enregistrer`
--
ALTER TABLE `enregistrer`
  ADD PRIMARY KEY (`num_type`,`num`),
  ADD KEY `ENREGISTRER_Reservation0_FK` (`num`);

--
-- Index pour la table `liaison`
--
ALTER TABLE `liaison`
  ADD PRIMARY KEY (`code`),
  ADD KEY `Liaison_Secteur_FK` (`id_secteur`),
  ADD KEY `Liaison_Port0_FK` (`id_port_dep`),
  ADD KEY `Liaison_Port1_FK` (`id_port_arr`);

--
-- Index pour la table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`),
  ADD UNIQUE KEY `id_periode` (`id_periode`);

--
-- Index pour la table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id_port`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`num`),
  ADD KEY `Reservation_Traversee_FK` (`num_tra`);

--
-- Index pour la table `secteur`
--
ALTER TABLE `secteur`
  ADD PRIMARY KEY (`id_secteur`);

--
-- Index pour la table `traversee`
--
ALTER TABLE `traversee`
  ADD PRIMARY KEY (`num_tra`),
  ADD KEY `Traversee_Liaison_FK` (`code`),
  ADD KEY `Traversee_Bateau0_FK` (`id_bateau`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`num_type`),
  ADD KEY `Type_CATEGORIE_FK` (`lettre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bateau`
--
ALTER TABLE `bateau`
  MODIFY `id_bateau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `liaison`
--
ALTER TABLE `liaison`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `port`
--
ALTER TABLE `port`
  MODIFY `id_port` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `secteur`
--
ALTER TABLE `secteur`
  MODIFY `id_secteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `traversee`
--
ALTER TABLE `traversee`
  MODIFY `num_tra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `num_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
