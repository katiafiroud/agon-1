-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 05 Mai 2016 à 18:27
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `agon`
--

-- --------------------------------------------------------

--
-- Structure de la table `noms_groupes`
--

CREATE TABLE `noms_groupes` (
  `noms_groupes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `noms_groupes`
--

INSERT INTO `noms_groupes` (`noms_groupes`) VALUES
('natation_together'),
('football_4_young'),
('Natation_2'),
('footing_together');