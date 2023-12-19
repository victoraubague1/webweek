-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 déc. 2023 à 22:49
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ski`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `nom_activite` varchar(255) NOT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `id_organisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `nom_activite`, `lieu`, `id_organisateur`) VALUES
(1, 'Course de luge', 'Piste rouge 1', NULL),
(2, 'Curlball', 'On sait pas encore', NULL),
(3, 'Ball-sur-Glace', 'Près des ballons', NULL),
(4, 'Paint-ball', 'Jsp encore le lieu', NULL),
(5, 'Ski avec des ballons ', 'ahha', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `activite_equipe`
--

CREATE TABLE `activite_equipe` (
  `id_activite` int(11) NOT NULL,
  `id_equipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id_equipe` int(11) NOT NULL,
  `nom_equipe` varchar(255) NOT NULL,
  `id_groupe` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id_equipe`, `nom_equipe`, `id_groupe`, `points`) VALUES
(1, 'Team du Yams', NULL, 0),
(2, 'Team du puy', NULL, 2),
(3, 'Team des sorcières', NULL, 0),
(4, 'Team 4', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id_groupe` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `tarif` decimal(10,2) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `motdepasse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id_groupe`, `categorie`, `tarif`, `user`, `motdepasse`) VALUES
(1, 'National', 20.00, NULL, NULL),
(2, 'District', 10.00, NULL, NULL),
(3, 'Régional', 20.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `organisateur`
--

CREATE TABLE `organisateur` (
  `id_organisateur` int(11) NOT NULL,
  `nom_organisateur` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `organisateur`
--

INSERT INTO `organisateur` (`id_organisateur`, `nom_organisateur`, `contact`) VALUES
(1, 'Organisateur 1', 'Orga1@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id_partenaire` int(11) NOT NULL,
  `nom_partenaire` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `partenaire`
--

INSERT INTO `partenaire` (`id_partenaire`, `nom_partenaire`, `logo`) VALUES
(1, 'auchan', '/webweek/img/logo1.png');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id_participant` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `photo_participant` varchar(255) DEFAULT NULL,
  `id_equipe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `participant`
--

INSERT INTO `participant` (`id_participant`, `nom`, `prenom`, `age`, `photo_participant`, `id_equipe`) VALUES
(9, 'Nom21', 'Prénom22', 26, '../webweek/img/joueur1.jpg', 2),
(10, 'Nom51', 'Prénom52', 27, '../webweek/img/joueur1.jpg', 2),
(11, 'Nom62', 'Prénom62', 28, '../webweek/img/joueur1.jpg', 2),
(12, 'aa', 'aa', 12, '../webweek/img/joueur1.jpg', 1),
(13, 'girlz', 'power', 11, '../webweek/img/joueur1.jpg', 2),
(14, 'girlz', 'power', 11, '../webweek/img/joueur1.jpg', 2),
(28, 'Titouan', 'Delarie', 11, '../webweek/img/joueur1.jpg', 1),
(29, 'Titouan', 'Delarie', 11, '../webweek/img/joueur1.jpg', 1),
(30, 'Titouan', 'Delarie', 11, '../webweek/img/joueur1.jpg', 1),
(31, 'aa', 'aa', 12, '../webweek/img/joueur1.jpg', 1),
(32, 'equipetrois', 'aaa', 99, '../webweek/img/joueur1.jpg', 3),
(33, 'six', 'six', 12, '../webweek/img/joueur1.jpg', 1),
(34, 'sixdeux', 'sixdeu', 61, '../webweek/img/joueur1.jpg', 2),
(35, 'Hippo', 'HippoPuy', 18, '../webweek/img/joueur1.jpg\r\n', 1),
(36, 'norma', 'norma', 12, '../webweek/img/joueur2.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

CREATE TABLE `resultat` (
  `id_resultat` int(11) NOT NULL,
  `heure` time DEFAULT NULL,
  `id_equipe1` int(11) DEFAULT NULL,
  `id_equipe2` int(11) DEFAULT NULL,
  `id_activite` int(11) DEFAULT NULL,
  `id_equipe_gagnante` int(11) DEFAULT NULL,
  `score_equipe1` int(11) DEFAULT NULL,
  `score_equipe2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`id_resultat`, `heure`, `id_equipe1`, `id_equipe2`, `id_activite`, `id_equipe_gagnante`, `score_equipe1`, `score_equipe2`) VALUES
(65, NULL, 1, 2, 2, 2, 1, 2),
(66, NULL, 2, 3, 4, 2, 2, -1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`),
  ADD KEY `id_organisateur` (`id_organisateur`);

--
-- Index pour la table `activite_equipe`
--
ALTER TABLE `activite_equipe`
  ADD PRIMARY KEY (`id_activite`,`id_equipe`),
  ADD KEY `id_equipe` (`id_equipe`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id_equipe`),
  ADD KEY `id_groupe` (`id_groupe`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id_groupe`);

--
-- Index pour la table `organisateur`
--
ALTER TABLE `organisateur`
  ADD PRIMARY KEY (`id_organisateur`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id_partenaire`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id_participant`),
  ADD KEY `id_equipe` (`id_equipe`);

--
-- Index pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`id_resultat`),
  ADD KEY `id_equipe1` (`id_equipe1`),
  ADD KEY `id_equipe2` (`id_equipe2`),
  ADD KEY `id_activite` (`id_activite`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `organisateur`
--
ALTER TABLE `organisateur`
  MODIFY `id_organisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id_partenaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `id_resultat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `activite_ibfk_1` FOREIGN KEY (`id_organisateur`) REFERENCES `organisateur` (`id_organisateur`);

--
-- Contraintes pour la table `activite_equipe`
--
ALTER TABLE `activite_equipe`
  ADD CONSTRAINT `activite_equipe_ibfk_1` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id_activite`),
  ADD CONSTRAINT `activite_equipe_ibfk_2` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`);

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id_groupe`);

--
-- Contraintes pour la table `participant`
--
ALTER TABLE `participant`
  ADD CONSTRAINT `participant_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `equipe` (`id_equipe`);

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `resultat_ibfk_1` FOREIGN KEY (`id_equipe1`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `resultat_ibfk_2` FOREIGN KEY (`id_equipe2`) REFERENCES `equipe` (`id_equipe`),
  ADD CONSTRAINT `resultat_ibfk_3` FOREIGN KEY (`id_activite`) REFERENCES `activite` (`id_activite`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
