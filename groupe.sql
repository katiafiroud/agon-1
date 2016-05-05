-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 05 Mai 2016 à 18:30
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `agon`
--

-- --------------------------------------------------------
--
-- Structure de la table `Groupe`
--

CREATE TABLE `Groupe` (
  `id` int(11) NOT NULL,
  `nom_groupe` varchar(80) NOT NULL,
  `descriptif_groupe` text NOT NULL,
  `sport` varchar(80) NOT NULL,
  `departement` varchar(80) NOT NULL,
  `clubs` text NOT NULL,
  `photo_du_groupe` geometry NOT NULL,
  `planning_groupe` text NOT NULL,
  `nombre_max_de_participants` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Groupe`
--

INSERT INTO `Groupe` (`id`, `nom_groupe`, `descriptif_groupe`, `sport`, `departement`, `clubs`, `photo_du_groupe`, `planning_groupe`, `nombre_max_de_participants`) VALUES
(1, 'natation_together', 'XNatation_grpX est un groupe de natation qui organise régulièrement des compétitions de natation pour les jeunes de 12 à 16 ans. ', 'Natation', 'Essonne', 'XXXXX', '', '', 40),
(2, 'football_4_ever', 'XFoot_grpX est un groupe de foot qui organise régulièrement des matchs de football pour les jeunes de 12 à 16 ans. ', 'football', 'Essonne', 'XXXXX', '', '', 50),
(3, 'Natation_2', 'xxxxx', 'natation', 'Seine-Saint-Denis', 'xxxx', '', 'xxxx', 50),
(4, 'footing_together', 'XXXX', 'footing', 'Seine-Saint-Denis', 'xxxxxxxxx', '', 'xx', 40);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Groupe`
--
ALTER TABLE `Groupe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Groupe`
--
ALTER TABLE `Groupe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;