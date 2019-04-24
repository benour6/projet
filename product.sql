-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 24 avr. 2019 à 03:28
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `product`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `img` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `img`) VALUES
(1, 'amri', 'ben.png'),
(2, 'eee', 'benour.png'),
(3, 'volkswagen', 'volkswagen.png');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(30) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `reference` int(30) NOT NULL,
  `quantite` int(30) NOT NULL,
  `idca` int(11) NOT NULL,
  `prix` int(30) NOT NULL,
  `img` text NOT NULL,
  `description` varchar(225) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `idca` (`idca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `reference`, `quantite`, `idca`, `prix`, `img`, `description`) VALUES
(1, 'aaaa', 111, 78, 1, 89, 'benour.png', 'le le le '),
(2, 'na', 111, 777, 1, 10, 'ben.png', 'dhdj'),
(3, 'zzz', 789, 456, 2, 10, 'ben.png', 'uuuuu'),
(45, 'polo_vitre', 741, 13, 3, 130, 'lol.png', 'mouhem haja behia walah omniti nsalekha bibi lhemlaaaaaaa');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `dateajout` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `username`, `password`, `email`, `adresse`, `age`, `type`, `dateajout`) VALUES
(2, 'amin', 'bouafif', 'karim', '12345', 'karim.bouafif@esprit.tn', 'ariana', 26, 2, '2018-02-02'),
(6, 'admin', 'admin', 'admin', 'admin', 'admin@esprit.tn', 'sfax', 25, 1, '2018-02-02'),
(10, 'bouden', 'rym', 'BoudenRym', 'esprit', 'rym.bouden@esprit.tn', 'hfhjhdi', 20, 2, '2018-05-02');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idca`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
