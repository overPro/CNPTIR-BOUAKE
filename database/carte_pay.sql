-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 03 fév. 2020 à 11:25
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `carte_pay`
--
CREATE DATABASE IF NOT EXISTS `carte_pay` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `carte_pay`;

-- --------------------------------------------------------

--
-- Structure de la table `campagne`
--

DROP TABLE IF EXISTS `campagne`;
CREATE TABLE IF NOT EXISTS `campagne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_produit` varchar(220) NOT NULL,
  `nbre_vue` varchar(220) NOT NULL,
  `cout` varchar(220) NOT NULL,
  `montant` varchar(220) NOT NULL,
  `solde` varchar(220) NOT NULL,
  `etat` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `campagne`
--

INSERT INTO `campagne` (`id`, `reference_produit`, `nbre_vue`, `cout`, `montant`, `solde`, `etat`) VALUES
(1, '003', '1010', '10', '10100', '0', 'Actif'),
(2, '002', '10', '10', '100', '0', 'Actif'),
(3, '005', '10', '10', '100', '10', 'Actif');

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `numero_carte` varchar(250) NOT NULL,
  `cvv_carte` int(200) NOT NULL,
  `nom_carte` varchar(250) NOT NULL,
  `type_carte` varchar(250) NOT NULL,
  `solde_carte` int(250) NOT NULL,
  `date_creation` date NOT NULL,
  `heure_creation` time NOT NULL,
  `date_expiration` date NOT NULL,
  `devise_carte` varchar(250) NOT NULL,
  `pays_carte` varchar(250) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `etat_carte` varchar(250) NOT NULL,
  PRIMARY KEY (`numero_carte`),
  UNIQUE KEY `matricule` (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`numero_carte`, `cvv_carte`, `nom_carte`, `type_carte`, `solde_carte`, `date_creation`, `heure_creation`, `date_expiration`, `devise_carte`, `pays_carte`, `matricule`, `etat_carte`) VALUES
('9014521872969498', 120, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:58', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10020', 'Inactif'),
('9018709454145456', 133, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:00', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10033', 'Inactif'),
('9034589230567870', 148, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:15', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10048', 'Inactif'),
('9050183038743278', 140, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:01', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10040', 'Inactif'),
('9052565294105499', 105, 'Epencia', 'Marchand', 0, '2020-01-22', '03:17:35', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10005', 'Inactif'),
('9054983612769052', 114, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:56', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10014', 'Inactif'),
('9058561678107270', 136, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:01', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10036', 'Inactif'),
('9078741214503259', 125, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:58', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10025', 'Inactif'),
('9094729414921298', 129, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:59', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10029', 'Inactif'),
('9181836545854506', 149, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:22', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10049', 'Inactif'),
('9214185038927218', 103, 'Epencia', 'Marchand', 269800, '2020-01-22', '03:17:21', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10003', 'Inactif'),
('9216789490307633', 112, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:53', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10012', 'Inactif'),
('9230943072583291', 143, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:02', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10043', 'Inactif'),
('9236525898983070', 142, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:01', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10042', 'Inactif'),
('9252385032505050', 119, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:57', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10019', 'Inactif'),
('9274565874129655', 106, 'Epencia', 'Marchand', 0, '2020-01-22', '03:18:43', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10006', 'Inactif'),
('9296105636925290', 139, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:01', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10039', 'Inactif'),
('9298743432367610', 117, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:57', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10017', 'Inactif'),
('9323698187250768', 102, 'Epencia', 'Marchand', 5800, '2020-01-22', '03:17:21', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10002', 'Inactif'),
('9347632365816126', 131, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:59', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10031', 'Inactif'),
('9387090969418180', 124, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:58', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10024', 'Inactif'),
('9410983278507852', 113, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:55', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10013', 'Inactif'),
('9416569634527017', 130, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:59', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10030', 'Inactif'),
('9432509252901672', 110, 'Epencia', 'Marchand', 0, '2020-01-22', '03:18:49', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10010', 'Inactif'),
('9438325478525052', 150, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:27', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10050', 'Inactif'),
('9438705492781437', 135, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:00', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10035', 'Inactif'),
('9472181816325011', 108, 'Epencia', 'Marchand', 0, '2020-01-22', '03:18:47', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10008', 'Inactif'),
('9472547292787850', 109, 'Epencia', 'Marchand', 0, '2020-01-22', '03:18:48', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10009', 'Inactif'),
('9618345252189695', 123, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:58', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10023', 'Inactif'),
('9654129674567232', 146, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:12', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10046', 'Inactif'),
('9654927430789218', 104, 'Epencia', 'Marchand', 0, '2020-01-22', '03:17:24', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10004', 'Inactif'),
('9672967850789056', 116, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:57', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10016', 'Inactif'),
('9690127272105211', 122, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:58', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10022', 'Inactif'),
('9723254723456562', 134, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:00', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10034', 'Inactif'),
('9723636523470340', 115, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:57', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10015', 'Inactif'),
('9729436923272709', 118, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:57', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10018', 'Inactif'),
('9765054963810182', 141, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:01', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10041', 'Inactif'),
('9767658545276304', 144, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:02', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10044', 'Inactif'),
('9810189074101470', 126, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:59', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10026', 'Inactif'),
('9838501030385856', 147, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:13', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10047', 'Inactif'),
('9852149218921893', 132, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:00', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10032', 'Inactif'),
('9852587296189679', 128, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:59', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10028', 'Inactif'),
('9856563018729650', 137, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:01', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10037', 'Inactif'),
('9898345672901696', 107, 'Epencia', 'Marchand', 0, '2020-01-22', '03:18:45', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10007', 'Inactif'),
('9903058321818582', 101, 'Epencia', 'Marchand', 310, '2020-01-22', '03:17:17', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10001', 'Inactif'),
('9909074349690725', 145, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:02', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10045', 'Inactif'),
('9961674743818148', 111, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:45', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10011', 'Inactif'),
('9963096929214702', 121, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:58', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10021', 'Inactif'),
('9985290745676780', 127, 'Epencia', 'Marchand', 0, '2020-01-22', '03:22:59', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10027', 'Inactif'),
('9989074927858549', 138, 'Epencia', 'Marchand', 0, '2020-01-22', '03:23:01', '2020-01-22', 'XOF', 'Cote d\'Ivoire', '10038', 'Inactif');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `numero_commande` varchar(250) NOT NULL,
  `date_commande` datetime NOT NULL,
  `reference_produit` varchar(255) NOT NULL,
  `prix_produit` varchar(255) NOT NULL,
  `quantite_produit` varchar(250) NOT NULL,
  `montant_commande` varchar(255) NOT NULL,
  `frais_livraison` varchar(255) NOT NULL,
  `montant_total` varchar(255) NOT NULL,
  `adresse_livraison` varchar(255) NOT NULL,
  `epargne` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `etat_commande` varchar(250) NOT NULL,
  PRIMARY KEY (`numero_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`numero_commande`, `date_commande`, `reference_produit`, `prix_produit`, `quantite_produit`, `montant_commande`, `frais_livraison`, `montant_total`, `adresse_livraison`, `epargne`, `matricule`, `etat_commande`) VALUES
('COM280120202707', '2020-01-28 12:10:24', '005', '150000', '1', '150000', '0', '150000', '', '150000', '10003', 'Valide'),
('COM290120206845', '2020-01-29 09:18:39', '003', '2500', '1', '2500', '0', '2500', '', '0', '10001', 'Valide'),
('COM300120205774', '2020-01-30 11:42:32', '001', '120000', '1', '120000', '0', '120000', '', '0', '10003', 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `commande_transaction`
--

DROP TABLE IF EXISTS `commande_transaction`;
CREATE TABLE IF NOT EXISTS `commande_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commande` varchar(220) NOT NULL,
  `transaction` varchar(220) NOT NULL,
  `epargne` varchar(220) NOT NULL,
  `etat` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande_transaction`
--

INSERT INTO `commande_transaction` (`id`, `commande`, `transaction`, `epargne`, `etat`) VALUES
(1, 'COM280120202707', '10003202001301128', 'COM280120202707', 'Traiter');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `numero_compte` varchar(250) NOT NULL,
  `type_compte` varchar(250) NOT NULL,
  `solde_compte` int(250) NOT NULL,
  `date_creation` date NOT NULL,
  `etat_compte` varchar(250) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  PRIMARY KEY (`numero_compte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`numero_compte`, `type_compte`, `solde_compte`, `date_creation`, `etat_compte`, `matricule`) VALUES
('10001', 'Marchand', 3000, '2020-01-08', 'Actif', '190002');

-- --------------------------------------------------------

--
-- Structure de la table `credit`
--

DROP TABLE IF EXISTS `credit`;
CREATE TABLE IF NOT EXISTS `credit` (
  `code_credit` varchar(250) NOT NULL,
  `date_credit` date NOT NULL,
  `heure_credit` time NOT NULL,
  `capital` int(250) NOT NULL,
  `taux_interet` varchar(250) NOT NULL,
  `montant_interet` int(250) NOT NULL,
  `dette` int(250) NOT NULL,
  `date_remboursement` date NOT NULL,
  `epargne` int(250) NOT NULL,
  `part_entreprise` int(250) NOT NULL,
  `part_partenaire` int(250) NOT NULL,
  `part_autre` int(250) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `etat_credit` varchar(250) NOT NULL,
  PRIMARY KEY (`code_credit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `credit`
--

INSERT INTO `credit` (`code_credit`, `date_credit`, `heure_credit`, `capital`, `taux_interet`, `montant_interet`, `dette`, `date_remboursement`, `epargne`, `part_entreprise`, `part_partenaire`, `part_autre`, `matricule`, `etat_credit`) VALUES
('001', '2020-01-10', '12:00:00', 100000, '3.5', 3500, 103500, '2020-01-10', 0, 0, 0, 0, '10003', '');

-- --------------------------------------------------------

--
-- Structure de la table `diplome_formation`
--

DROP TABLE IF EXISTS `diplome_formation`;
CREATE TABLE IF NOT EXISTS `diplome_formation` (
  `code_diplome` varchar(250) NOT NULL,
  `code_formation` varchar(250) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `signataire` varchar(250) NOT NULL,
  `date_delivrance` date NOT NULL,
  PRIMARY KEY (`code_diplome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplome_formation`
--

INSERT INTO `diplome_formation` (`code_diplome`, `code_formation`, `matricule`, `signataire`, `date_delivrance`) VALUES
('20WD1009', 'WD0001', '190003', 'KOFFI ERIC', '2020-01-10');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `code_entreprise` varchar(250) NOT NULL,
  `raison_sociale` varchar(200) NOT NULL,
  `registre_commerce` varchar(200) NOT NULL,
  `compte_contribuable` varchar(200) NOT NULL,
  `siege_social` varchar(200) NOT NULL,
  `telephone_entreprise` varchar(250) NOT NULL,
  `email_entreprise` varchar(200) NOT NULL,
  `directeur_general` varchar(200) NOT NULL,
  `date_creation` date NOT NULL,
  `date_enregistrement` date NOT NULL,
  PRIMARY KEY (`code_entreprise`),
  UNIQUE KEY `raison_sociale` (`raison_sociale`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`code_entreprise`, `raison_sociale`, `registre_commerce`, `compte_contribuable`, `siege_social`, `telephone_entreprise`, `email_entreprise`, `directeur_general`, `date_creation`, `date_enregistrement`) VALUES
('CK', 'CK Groupe', 'CI-BKE', '18', 'Bouake', '48', '', '', '2019-08-01', '2019-08-14'),
('MDG', 'Mandigo', '', '', '', '', '', '', '2019-08-27', '2019-08-27'),
('ER', 'Epencia', '', '', '', '', '', '', '2019-08-25', '2019-08-25');

-- --------------------------------------------------------

--
-- Structure de la table `epargne`
--

DROP TABLE IF EXISTS `epargne`;
CREATE TABLE IF NOT EXISTS `epargne` (
  `code_epargne` varchar(250) NOT NULL,
  `type_epargne` varchar(250) NOT NULL,
  `date_creation` date NOT NULL,
  `heure_creation` time NOT NULL,
  `montant_epargne` int(250) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `duree` varchar(250) NOT NULL,
  `frais` varchar(250) NOT NULL,
  `part_client` int(250) NOT NULL,
  `part_entreprise` int(250) NOT NULL,
  `part_partenaire` int(250) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `etat_epargne` varchar(250) NOT NULL,
  PRIMARY KEY (`code_epargne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `epargne`
--

INSERT INTO `epargne` (`code_epargne`, `type_epargne`, `date_creation`, `heure_creation`, `montant_epargne`, `date_debut`, `date_fin`, `duree`, `frais`, `part_client`, `part_entreprise`, `part_partenaire`, `matricule`, `etat_epargne`) VALUES
('COM100120202545', 'eCommerce', '2020-01-28', '11:41:48', 100, '2020-01-28', '2020-01-28', '1', '0', 50, 0, 0, '10003', 'bloque'),
('COM250120204321', 'eCommerce', '2020-01-28', '11:45:46', 10100, '2020-01-28', '2020-01-28', '1', '0', 5000, 0, 0, '10003', 'bloque'),
('COM280120202707', 'eCommerce', '2020-01-28', '12:38:04', 285900, '2020-01-28', '2020-01-28', '1', '0', 400, 0, 0, '10003', 'bloque'),
('EP190003202001101356', 'eCommerce', '2020-01-10', '13:56:00', 2020, '2020-01-10', '2020-01-10', '1', '20.4', 1000, 10, 10, '10003', 'Inactif');

-- --------------------------------------------------------

--
-- Structure de la table `forfait`
--

DROP TABLE IF EXISTS `forfait`;
CREATE TABLE IF NOT EXISTS `forfait` (
  `id` int(11) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `debut` varchar(20) NOT NULL,
  `fin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `code_formation` varchar(250) NOT NULL,
  `module_formation` varchar(250) NOT NULL,
  `cout_formation` varchar(250) NOT NULL,
  `date_formation` date NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `duree_heure` varchar(250) NOT NULL,
  `lieu_formation` varchar(250) NOT NULL,
  `formateurs` text NOT NULL,
  `cibles` text NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `etat_formation` varchar(250) NOT NULL,
  PRIMARY KEY (`code_formation`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`code_formation`, `module_formation`, `cout_formation`, `date_formation`, `heure_debut`, `heure_fin`, `duree_heure`, `lieu_formation`, `formateurs`, `cibles`, `matricule`, `etat_formation`) VALUES
('WD0001', 'WINDEV', '', '2020-01-10', '11:20:24', '16:08:09', '6', 'Agence Mandigo Bouake', '                     	Baudouin Henri\r\nKramoh Olivier                                                               ', '                     	Informaticiens\r\nGrand public                                                               ', 'CK', 'Actif');

-- --------------------------------------------------------

--
-- Structure de la table `investissement`
--

DROP TABLE IF EXISTS `investissement`;
CREATE TABLE IF NOT EXISTS `investissement` (
  `numero_contrat` varchar(250) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `capital` varchar(250) NOT NULL,
  `taux_mensuel` varchar(250) NOT NULL,
  `echeancier_mensuel` varchar(250) NOT NULL,
  `taux_annuel` varchar(250) NOT NULL,
  `echeancier_annuel` varchar(250) NOT NULL,
  `solde_final` varchar(250) NOT NULL,
  `duree_contrat` varchar(250) NOT NULL,
  `frequence_paiement` varchar(250) NOT NULL,
  `date_versement1` date NOT NULL,
  `montant_versement1` varchar(250) NOT NULL,
  `etat_versement1` varchar(250) NOT NULL,
  `date_versement2` date NOT NULL,
  `montant_versement2` varchar(250) NOT NULL,
  `etat_versement2` varchar(250) NOT NULL,
  `date_versement3` date NOT NULL,
  `montant_versement3` varchar(250) NOT NULL,
  `etat_versement3` varchar(250) NOT NULL,
  `date_versement4` date NOT NULL,
  `montant_versement4` varchar(250) NOT NULL,
  `etat_versement4` varchar(250) NOT NULL,
  `date_versement5` date NOT NULL,
  `montant_versement5` varchar(250) NOT NULL,
  `etat_versement5` varchar(250) NOT NULL,
  `date_versement6` date NOT NULL,
  `montant_versement6` varchar(250) NOT NULL,
  `etat_versement6` varchar(250) NOT NULL,
  `date_versement7` date NOT NULL,
  `montant_versement7` varchar(250) NOT NULL,
  `etat_versement7` varchar(250) NOT NULL,
  `date_versement8` date NOT NULL,
  `montant_versement8` varchar(250) NOT NULL,
  `etat_versement8` varchar(250) NOT NULL,
  `date_versement9` date NOT NULL,
  `montant_versement9` varchar(250) NOT NULL,
  `etat_versement9` varchar(250) NOT NULL,
  `date_versement10` date NOT NULL,
  `montant_versement10` varchar(250) NOT NULL,
  `etat_versement10` varchar(250) NOT NULL,
  `date_versement11` date NOT NULL,
  `montant_versement11` varchar(250) NOT NULL,
  `etat_versement11` varchar(250) NOT NULL,
  `date_versement12` date NOT NULL,
  `montant_versement12` varchar(250) NOT NULL,
  `etat_versement12` varchar(250) NOT NULL,
  `part_entreprise` varchar(250) NOT NULL,
  `etat_capital` varchar(250) NOT NULL,
  `etat_investissement` varchar(250) NOT NULL,
  PRIMARY KEY (`numero_contrat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `investissement`
--

INSERT INTO `investissement` (`numero_contrat`, `matricule`, `capital`, `taux_mensuel`, `echeancier_mensuel`, `taux_annuel`, `echeancier_annuel`, `solde_final`, `duree_contrat`, `frequence_paiement`, `date_versement1`, `montant_versement1`, `etat_versement1`, `date_versement2`, `montant_versement2`, `etat_versement2`, `date_versement3`, `montant_versement3`, `etat_versement3`, `date_versement4`, `montant_versement4`, `etat_versement4`, `date_versement5`, `montant_versement5`, `etat_versement5`, `date_versement6`, `montant_versement6`, `etat_versement6`, `date_versement7`, `montant_versement7`, `etat_versement7`, `date_versement8`, `montant_versement8`, `etat_versement8`, `date_versement9`, `montant_versement9`, `etat_versement9`, `date_versement10`, `montant_versement10`, `etat_versement10`, `date_versement11`, `montant_versement11`, `etat_versement11`, `date_versement12`, `montant_versement12`, `etat_versement12`, `part_entreprise`, `etat_capital`, `etat_investissement`) VALUES
('001', '10001', '10000', '3', '3000', '36', '3600', '136000', '12', '30', '2020-01-23', '3000', '', '2020-02-23', '3000', '', '2020-03-23', '3000', '', '2020-04-23', '3000', '', '2020-05-23', '3000', '', '2020-06-23', '3000', '', '2020-07-23', '3000', '', '2020-08-23', '3000', '', '2020-09-23', '3000', '', '2020-10-23', '3000', '', '2020-11-23', '3000', '', '2020-12-23', '3000', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objet` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `date` datetime NOT NULL,
  `user` int(11) NOT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `objet`, `titre`, `text`, `date`, `user`, `fichier`) VALUES
(1, 'Informations', 'Essai', 'Ce test est terminÃ©', '2020-02-03 09:21:59', 1, NULL),
(2, 'Annonces', 'Test Beta', 'Juste une petite annonce de fin', '2020-02-03 09:23:46', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `offre_emploi`
--

DROP TABLE IF EXISTS `offre_emploi`;
CREATE TABLE IF NOT EXISTS `offre_emploi` (
  `code` varchar(250) NOT NULL,
  `intitule` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `profil` text NOT NULL,
  `missions` text NOT NULL,
  `contacts` varchar(250) NOT NULL,
  `date_creation` date NOT NULL,
  `date_expiration` date NOT NULL,
  `nombre_poste` varchar(250) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `etat_disponibilite` varchar(250) NOT NULL,
  `etat_offre` varchar(250) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offre_emploi`
--

INSERT INTO `offre_emploi` (`code`, `intitule`, `type`, `profil`, `missions`, `contacts`, `date_creation`, `date_expiration`, `nombre_poste`, `matricule`, `etat_disponibilite`, `etat_offre`) VALUES
('002', 'IDA', 'Stage', '                     	                     ', '                     	                     ', '', '2020-01-16', '2020-01-31', '23', 'CK', 'Disponible', 'Actif'),
('003', 'Developpeur web', 'Emploi', '', '', '', '2020-01-01', '2020-01-15', '10', '', '', 'Inactif');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference_produit` varchar(250) NOT NULL,
  `libelle_produit` varchar(250) NOT NULL,
  `details_produit` text NOT NULL,
  `prix_achat` varchar(250) NOT NULL,
  `prix_vente` varchar(250) NOT NULL,
  `quota` varchar(250) NOT NULL,
  `photo1_produit` varchar(250) NOT NULL,
  `photo2_produit` varchar(250) NOT NULL,
  `photo3_produit` varchar(250) NOT NULL,
  `photo4_produit` varchar(250) NOT NULL,
  `categorie_produit` varchar(250) NOT NULL,
  `code_fournisseur` varchar(250) NOT NULL,
  `etat_produit` varchar(250) NOT NULL,
  PRIMARY KEY (`reference_produit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference_produit`, `libelle_produit`, `details_produit`, `prix_achat`, `prix_vente`, `quota`, `photo1_produit`, `photo2_produit`, `photo3_produit`, `photo4_produit`, `categorie_produit`, `code_fournisseur`, `etat_produit`) VALUES
('001', 'Ordinateur PC', '', '100000', '120000', '20000', '', '', '', '', 'Informatiques', '10001', 'Disponible'),
('002', 'Savon Eclat medical', '', '', '', '', '', '', '', '', 'Modes et Beautes', '10001', ''),
('003', 'Roger cavales', '', '2000', '2500', '500', '', '', '', '', 'Modes et Beautes', '10003', 'Actif'),
('004', 'Logiciels', '', '', '', '', '', '', '', '', 'Informatiques', '10001', ''),
('005', 'Television', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '145000', '150000', '50000', '', '', '', '', 'Electromenagers', '10001', 'Disponible'),
('006', 'Camera', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '145000', '150000', '50000', '', '', '', '', 'Multimedia', '10001', 'Disponible');

-- --------------------------------------------------------

--
-- Structure de la table `recharge`
--

DROP TABLE IF EXISTS `recharge`;
CREATE TABLE IF NOT EXISTS `recharge` (
  `code_recharge` varchar(20) NOT NULL,
  `montant_recharge` int(200) NOT NULL,
  `date_creation` date NOT NULL,
  `date_utilisation` date NOT NULL,
  `etat_recharge` varchar(20) NOT NULL,
  `code_agent` varchar(250) NOT NULL,
  `etat_validation` varchar(250) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  PRIMARY KEY (`code_recharge`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recharge`
--

INSERT INTO `recharge` (`code_recharge`, `montant_recharge`, `date_creation`, `date_utilisation`, `etat_recharge`, `code_agent`, `etat_validation`, `matricule`) VALUES
('200121034325', 20000, '2020-01-24', '2020-01-24', 'Inactif', '10001', 'Vendu', '10003'),
('201496369078', 5000, '2020-01-21', '2020-01-21', 'Inactif', '10002', 'Vendu', '10001'),
('202925850105', 5000, '2020-01-24', '2020-01-24', 'Inactif', '10001', 'Vendu', '10002'),
('207494361450', 2000, '2020-01-21', '2020-01-24', 'Inactif', '10003', 'Vendu', '10003');

-- --------------------------------------------------------

--
-- Structure de la table `souscription_offre`
--

DROP TABLE IF EXISTS `souscription_offre`;
CREATE TABLE IF NOT EXISTS `souscription_offre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(220) NOT NULL,
  `matricule` varchar(220) NOT NULL,
  `date_souscription` date DEFAULT NULL,
  `piece_jointe` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `souscription_offre`
--

INSERT INTO `souscription_offre` (`id`, `code`, `matricule`, `date_souscription`, `piece_jointe`) VALUES
(1, '002', '10003', '2020-01-30', '0021000319290.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `sponsoring`
--

DROP TABLE IF EXISTS `sponsoring`;
CREATE TABLE IF NOT EXISTS `sponsoring` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_produit` varchar(220) NOT NULL,
  `matricule` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sponsoring`
--

INSERT INTO `sponsoring` (`id`, `reference_produit`, `matricule`) VALUES
(1, '005', '10001');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `numero_transaction` varchar(250) NOT NULL,
  `date_transaction` date NOT NULL,
  `heure_transaction` time NOT NULL,
  `montant_transaction` int(250) NOT NULL,
  `frais` int(250) NOT NULL,
  `montant_total` int(250) NOT NULL,
  `type_transaction` varchar(250) NOT NULL,
  `objet_transaction` varchar(250) NOT NULL,
  `numero_expediteur` varchar(250) NOT NULL,
  `numero_destinataire` varchar(250) NOT NULL,
  `token_expediteur` varchar(250) NOT NULL,
  `token_destinataire` varchar(250) NOT NULL,
  `conf_token_expediteur` varchar(250) NOT NULL,
  `conf_token_destinataire` varchar(250) NOT NULL,
  `part_entreprise` int(250) NOT NULL,
  `part_partenaire` int(250) NOT NULL,
  `part_autre` int(250) NOT NULL,
  `etat_transaction` varchar(250) NOT NULL,
  PRIMARY KEY (`numero_transaction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`numero_transaction`, `date_transaction`, `heure_transaction`, `montant_transaction`, `frais`, `montant_total`, `type_transaction`, `objet_transaction`, `numero_expediteur`, `numero_destinataire`, `token_expediteur`, `token_destinataire`, `conf_token_expediteur`, `conf_token_destinataire`, `part_entreprise`, `part_partenaire`, `part_autre`, `etat_transaction`) VALUES
('10001202001311415', '2020-01-31', '14:15:00', 100, 0, 100, 'Transfert', 'Sponsoring', '10001', 'Caisse', '917', '917', '', '', 0, 0, 0, 'Succes'),
('10001202001311416', '2020-01-31', '14:16:00', 100, 0, 100, 'Transfert', 'Sponsoring', '10001', 'Caisse', '647', '647', '', '', 0, 0, 0, 'Succes'),
('10001202001311551', '2020-01-31', '15:51:00', 10, 0, 10, 'depot', 'Sponsoring', 'Caisse', '10001', '640', '640', '', '', 0, 0, 0, 'Succes'),
('1000320200124', '2020-01-24', '03:59:05', 3000, 0, 3000, 'Retrait', 'Demande de retrait', '10003', '09107849', '153', '268', '153', '09107849', 0, 0, 0, 'Succes'),
('10003202001281141', '2020-01-28', '11:41:00', 50, 0, 50, 'Epargne', 'eCommerce', '10003', 'COM100120202545', '086', '825', '086', '825', 0, 0, 0, 'Succes'),
('10003202001281142', '2020-01-28', '11:42:00', 50, 0, 50, 'Epargne', 'eCommerce', '10003', 'COM100120202545', '464', '955', '464', '955', 0, 0, 0, 'Succes'),
('10003202001281144', '2020-01-28', '11:44:00', 50, 0, 50, 'Epargne', 'eCommerce', '10003', 'COM100120202545', '900', '029', '900', '029', 0, 0, 0, 'Succes'),
('10003202001281145', '2020-01-28', '11:45:00', 5000, 0, 5000, 'Epargne', 'eCommerce', '10003', 'COM250120204321', '614', '569', '614', '569', 0, 0, 0, 'Succes'),
('10003202001281207', '2020-01-28', '12:07:00', 5000, 0, 5000, 'Epargne', 'eCommerce', '10003', 'COM250120204321', '837', '506', '837', '506', 0, 0, 0, 'Succes'),
('10003202001281208', '2020-01-28', '12:08:00', 100, 0, 100, 'Epargne', 'eCommerce', '10003', 'COM250120204321', '829', '316', '829', '316', 0, 0, 0, 'Succes'),
('10003202001281234', '2020-01-28', '12:34:00', 400, 0, 400, 'Epargne', 'eCommerce', '10003', 'COM280120202707', '296', '857', '296', '857', 0, 0, 0, 'Succes'),
('10003202001281238', '2020-01-28', '12:38:00', 400, 0, 400, 'Epargne', 'eCommerce', '10003', 'COM280120202707', '789', '574', '789', '574', 0, 0, 0, 'Succes'),
('10003202001281242', '2020-01-28', '12:42:00', 200, 0, 200, 'Epargne', 'eCommerce', '10003', 'COM280120202707', '521', '579', '521', '579', 0, 0, 0, 'Succes'),
('10003202001281243', '2020-01-28', '12:43:00', 100, 0, 100, 'Epargne', 'eCommerce', '10003', 'COM280120202707', '151', '907', '151', '907', 0, 0, 0, 'Succes'),
('10003202001281254', '2020-01-28', '12:54:00', 100, 0, 100, 'Epargne', 'eCommerce', '10003', 'COM280120202707', '255', '237', '255', '237', 0, 0, 0, 'Succes'),
('10003202001281255', '2020-01-28', '12:55:00', 200, 0, 200, 'Epargne', 'eCommerce', '10003', 'COM280120202707', '991', '564', '991', '564', 0, 0, 0, 'Succes'),
('10003202001290902', '2020-01-29', '09:02:00', 150000, 0, 150000, 'Epargne', 'eCommerce', '10003', 'COM280120202707', '264', '844', '264', '844', 0, 0, 0, 'Succes'),
('10003202001290911', '2020-01-29', '09:11:00', 134900, 0, 134900, 'Epargne', 'eCommerce', '10003', 'COM280120202707', '827', '108', '827', '108', 0, 0, 0, 'Succes'),
('10003202001301126', '2020-01-30', '11:26:00', 285900, 0, 285900, 'Epargne', 'Achat E-Commerce', '10003', '10003', '568', '545', '568', '', 0, 0, 0, 'Succes'),
('10003202001301128', '2020-01-30', '11:28:00', 285900, 0, 285900, 'Epargne', 'Achat E-Commerce', '10003', '10003', '568', '049', '568', '049', 0, 0, 0, 'Succes'),
('10003202001311324', '2020-01-31', '13:24:00', 10100, 0, 10100, 'Transfert', 'Sponsoring', '10003', 'Caisse', '595', '595', '', '', 0, 0, 0, 'Succes'),
('10003202001311327', '2020-01-31', '13:27:00', 10100, 0, 10100, 'Transfert', 'Sponsoring', '10003', 'Caisse', '922', '922', '', '', 0, 0, 0, 'Succes'),
('10003202001311328', '2020-01-31', '13:28:00', 10100, 0, 10100, 'Transfert', 'Sponsoring', '10003', 'Caisse', '268', '268', '', '', 0, 0, 0, 'Succes'),
('200120207410', '2020-01-24', '04:21:00', 500, 0, 500, 'Transfert', 'Rechargement', '10003', '10001', '337', '208', '337', '208', 0, 0, 0, 'Succes'),
('200121034325', '2020-01-24', '03:51:34', 20000, 500, 19500, 'Depot', 'Rechargement', '10003', 'Caisse', '151', '606', '151', '606', 200, 200, 100, 'Succes'),
('202925850105', '2020-01-24', '03:57:59', 5000, 200, 4800, 'Depot', 'Rechargement', '10002', 'Caisse', '971', '408', '971', '408', 80, 80, 40, 'Succes'),
('AAZZEER', '2020-01-24', '04:21:00', 1000, 0, 1000, 'Transfert', 'Rechargement', '10003', '10002', '511', '248', '511', '248', 0, 0, 0, 'Succes'),
('wsexdrcftgvhbjnkl', '2020-01-07', '03:01:28', 1500, 0, 1500, 'bh', 'test', '1000245', '10002225', '152', '150', '', '', 0, 0, 0, 'ok');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(250) DEFAULT NULL,
  `nom_prenom` varchar(200) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mdp` varchar(250) DEFAULT NULL,
  `telephone` varchar(250) DEFAULT NULL,
  `matricule` varchar(250) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `fonction` varchar(250) NOT NULL,
  `entreprise` varchar(250) NOT NULL,
  `activite` varchar(250) NOT NULL,
  `date_creation` date DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `etat` varchar(2250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `nom_prenom`, `email`, `mdp`, `telephone`, `matricule`, `role`, `fonction`, `entreprise`, `activite`, `date_creation`, `photo`, `etat`) VALUES
(1, '1', 'Koffi Kouadio Eric', 'infoseric35@gmail.com', '1', '09107849', '10001', 'Superviseur', '', '', 'Ingenierie informatique,formations,vente de materiels', '2019-05-30', 'tel.jpg', 'Actif'),
(2, '2', 'Amany Dominique', 'admin@epencia.net', '2', '12345678', '10002', 'Distributeur', '', 'CK', '', '2019-06-11', 'el5.jpg', 'Actif'),
(3, '3', 'Pokou Emmanuel', 'admin@epencia.net', '3', '12345678', '10003', 'Investisseur', '', '', '', '2019-06-11', 'tv.jpg', 'Actif'),
(4, '4', 'Baudouin Henri', NULL, '4', NULL, '10004', 'Administrateur', '', '', '', '2020-01-24', NULL, 'Actif');

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

DROP TABLE IF EXISTS `visiteurs`;
CREATE TABLE IF NOT EXISTS `visiteurs` (
  `id_visiteur` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `reference` varchar(250) NOT NULL,
  PRIMARY KEY (`id_visiteur`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visiteurs`
--

INSERT INTO `visiteurs` (`id_visiteur`, `date`, `heure`, `reference`) VALUES
(1, '2020-01-30', '16:54:25', '004'),
(2, '2020-01-31', '14:38:41', '002');

-- --------------------------------------------------------

--
-- Structure de la table `vue`
--

DROP TABLE IF EXISTS `vue`;
CREATE TABLE IF NOT EXISTS `vue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `lecture` tinyint(1) NOT NULL DEFAULT '0',
  `affichage` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vue`
--

INSERT INTO `vue` (`id`, `notification`, `user`, `lecture`, `affichage`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 0, 1),
(3, 1, 3, 0, 1),
(4, 1, 4, 0, 1),
(5, 2, 1, 0, 1),
(6, 2, 2, 0, 1),
(7, 2, 3, 0, 1),
(8, 2, 4, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
