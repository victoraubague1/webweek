-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 déc. 2023 à 08:08
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
(1, 'Course de luge', 'Piste rouge 1', 1),
(2, 'Curlball', 'On sait pas encore', 1),
(3, 'Ball-sur-Glace', 'Près des ballons', 1),
(4, 'Paint-ball', 'Jsp encore le lieu', 1),
(5, 'Ski avec des ballons ', 'ahha', 1);

-- --------------------------------------------------------

--
-- Structure de la table `activite_equipe`
--

CREATE TABLE `activite_equipe` (
  `id_activite` int(11) NOT NULL,
  `id_equipe` int(11) NOT NULL,
  `heure` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `activite_equipe`
--

INSERT INTO `activite_equipe` (`id_activite`, `id_equipe`, `heure`) VALUES
(2, 19, '05:32:00'),
(3, 18, '05:23:00'),
(3, 19, '03:27:00');

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
(16, 'GIRLZ', 2, 4),
(17, 'AUBAGUE VICTOR', 3, 2),
(18, 'PuyEnVelay', 3, 3),
(19, 'StJo', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id_groupe` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `tarif` decimal(10,2) DEFAULT NULL,
  `tranche_age` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id_groupe`, `categorie`, `tarif`, `tranche_age`) VALUES
(1, 'National', 20.00, '17-19 ans'),
(2, 'District', 10.00, '22-25 ans'),
(3, 'Régional', 20.00, '22-25 ans');

-- --------------------------------------------------------

--
-- Structure de la table `organisateur`
--

CREATE TABLE `organisateur` (
  `id_organisateur` int(11) NOT NULL,
  `nom_organisateur` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `motdepasse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `organisateur`
--

INSERT INTO `organisateur` (`id_organisateur`, `nom_organisateur`, `contact`, `user`, `motdepasse`) VALUES
(1, 'Organisateur 1', 'Orga1@gmail.com', 'admin', 'admin'),
(2, 'gbr', NULL, 'gbr', 'admin');

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
(93, 'VICTOR', 'AUBAGUE', 123, '/webweek/img/IMG_0769.jpg', 16),
(94, 'VICTOR', 'AUBAGUE', 12, '/webweek/img/IMG_0780.jpg', 16),
(95, 'VICTOR', 'AUBAGUE', 12, '/webweek/img/IMG_0786.jpg', 16),
(96, 'VICTOR', 'AUBAGUE', 12, '/webweek/img/IMG_0771.jpg', 17),
(97, 'VICTOR', 'AUBAGUE', 89, '/webweek/img/IMG_0783.jpg', 17),
(98, 'VICTOR', 'AUBAGUE', 56, '/webweek/img/IMG_0784.jpg', 17),
(99, 'Puy', 'Velay', 23, '/webweek/img/IMG_0769.jpg', 18),
(100, 'Titi', 'Paye', 21, '/webweek/img/IMG_0769.jpg', 18),
(101, 'Rob', 'Tut', 12, '/webweek/img/IMG_0769.jpg', 18),
(102, 'Stjo', 'Tray', 112, '/webweek/img/IMG_0769.jpg', 19),
(103, 'Jiji', 'Joel', 23, '/webweek/img/IMG_0769.jpg', 19),
(104, 'Xav', 'Grim', 22, '/webweek/img/IMG_0769.jpg', 19);

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
(73, NULL, 16, 17, 4, 16, 12, 11),
(74, NULL, 16, 17, 5, 19, 12, 11),
(75, NULL, 18, 19, 2, 19, 12, 111),
(76, NULL, 17, 18, 4, 17, 122, 12),
(77, NULL, 16, 18, 4, 16, 111, 23),
(78, NULL, 16, 18, 4, 18, 122, 123),
(79, NULL, 16, 18, 4, 18, 11, 89),
(80, NULL, 16, 19, 4, 19, 11, 123),
(81, NULL, 16, 19, 1, 16, 12, 112),
(82, NULL, 17, 18, 1, 17, 122, 11),
(83, NULL, 16, 17, 3, 16, 12, 11),
(84, NULL, 17, 18, 4, 18, 12, 23);

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
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `organisateur`
--
ALTER TABLE `organisateur`
  MODIFY `id_organisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `id_resultat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

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
