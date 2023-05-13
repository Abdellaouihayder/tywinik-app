-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 19 mars 2023 à 21:17
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tywink`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `cinClient` int(11) NOT NULL,
  `nbetoile` int(11) NOT NULL,
  `texte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `cinClient`, `nbetoile`, `texte`) VALUES
(30, 19419487, 4, 'la palette de couleur est apaisante'),
(31, 14867362, 5, 'Parfait.'),
(32, 14869536, 4, 'On trouve tous.'),
(33, 14578365, 3, 'Pas mal.');

-- --------------------------------------------------------

--
-- Structure de la table `avispc`
--

CREATE TABLE `avispc` (
  `id` int(11) NOT NULL,
  `cinClient` int(11) NOT NULL,
  `nbetoile` int(11) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `idtrajet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avispc`
--

INSERT INTO `avispc` (`id`, `cinClient`, `nbetoile`, `texte`, `idtrajet`) VALUES
(30, 14514587, 3, 'bonne ambiance ', 139),
(31, 14869536, 5, 'Satisfait.', 143),
(32, 14869536, 2, 'Manque de responsabilite.', 140);

-- --------------------------------------------------------

--
-- Structure de la table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(555) NOT NULL,
  `replies` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'salut', 'salut toi'),
(2, 'cv', 'cv bien'),
(3, 'bonjour', 'bounjour bedoui'),
(4, 'saluttt', 'bonsoir'),
(5, 'donner votre mail', '@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` int(200) NOT NULL,
  `cinClient` int(11) NOT NULL,
  `date_cre` datetime NOT NULL,
  `date_res` date DEFAULT NULL,
  `description` text NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `cinClient`, `date_cre`, `date_res`, `description`, `type`) VALUES
(123503, 19419487, '2022-12-15 02:29:26', NULL, 'j\'ai un problem avec la suppression d\'un de mes trajets', 'conducteur'),
(123504, 19619622, '2022-12-15 02:41:26', NULL, 'trop exigeant', 'passager'),
(123505, 14867362, '2022-12-15 04:14:14', NULL, 'Il fume trop.', 'conducteur'),
(123506, 14867362, '2022-12-15 04:14:39', NULL, 'Parle beaucoup.', 'conducteur'),
(123507, 14869536, '2022-12-15 04:34:06', NULL, 'Fume trop', 'conducteur'),
(123508, 14578365, '2022-12-15 04:43:25', NULL, 'Impoli', 'passager');

-- --------------------------------------------------------

--
-- Structure de la table `rescon`
--

CREATE TABLE `rescon` (
  `idrescon` int(11) NOT NULL,
  `cin` int(11) NOT NULL,
  `servic` varchar(55) NOT NULL,
  `tarif` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `datere` date NOT NULL,
  `cinClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rescon`
--

INSERT INTO `rescon` (`idrescon`, `cin`, `servic`, `tarif`, `distance`, `prix`, `datere`, `cinClient`) VALUES
(39, 19619622, 'Déménagement/Emménagement', 4, 30, 120, '2022-12-17', 14514587),
(40, 19619622, 'Événementiel', 4, 10, 40, '2022-12-18', 14514587),
(41, 19619622, 'Déménagement/Emménagement', 4, 5, 20, '2022-12-18', 14867362),
(42, 19419487, 'Course-Personnalisée', 5, 2, 10, '2022-12-23', 14867362),
(43, 19419487, 'Course-Personnalisée', 5, 3, 15, '2022-12-24', 14869536),
(44, 19619622, 'Course-Personnalisée', 4, 2, 8, '2022-12-10', 14578365),
(45, 19619622, 'Course-Personnalisée', 4, 20, 80, '2023-03-25', 15250422);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idres` int(11) NOT NULL,
  `idtrajet` int(11) NOT NULL,
  `nbrplace` int(55) NOT NULL,
  `cinClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idres`, `idtrajet`, `nbrplace`, `cinClient`) VALUES
(1286, 139, 4, 14514587),
(1287, 137, 1, 14867362),
(1288, 140, 1, 14869536),
(1289, 143, 2, 14869536),
(1290, 138, 2, 14578365),
(1291, 140, 3, 14867362),
(1292, 144, 2, 14867362),
(1293, 140, 2, 15250422);

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE `trajet` (
  `idt` int(11) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `idc` int(11) NOT NULL,
  `pt_dep` varchar(30) NOT NULL,
  `pt_arr` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `place` int(11) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`idt`, `matricule`, `idc`, `pt_dep`, `pt_arr`, `date`, `heure`, `place`, `prix`, `description`) VALUES
(136, '471TUNIS4566', 19419487, 'esprit', 'nasr', '2022-12-15', '17:15:00', 3, 3, ''),
(137, '471TUNIS4566', 19419487, 'nasr', 'esprit', '2022-12-15', '20:16:00', 2, 5, ''),
(138, '541TUNIS1221', 19619622, 'sousse', 'esprit', '2022-12-16', '14:00:00', 3, 10, 'tout style de musique est permis'),
(139, '213TUNIS788', 19619622, 'esprit', 'mahdia', '2022-12-16', '17:40:00', 2, 15, 'pas de discussion si possible'),
(140, '341TUNIS788', 14514587, 'esprit', 'lac', '2022-12-16', '16:00:00', 3, 4, ''),
(141, '341TUNIS788', 14514587, 'lac', 'esprit', '2022-12-16', '21:00:00', 3, 6, ''),
(142, '150TUNIS8909', 14867362, 'Esprit', 'Nasser', '2022-12-19', '05:30:00', 2, 12, 'Music available.'),
(143, '217TUNIS5024', 14867362, 'Ghazella', 'Esprit', '2022-12-21', '07:15:00', 1, 8, 'Veuillez ne pas fumer.'),
(144, '186TUNIS7153', 14869536, 'Esprit', 'Menzeh6', '2022-12-16', '07:33:00', 2, 4, 'Vous pouvez fumer.'),
(145, '186TUNIS7153', 14869536, 'Nkhilet', 'Esprit', '2022-12-23', '08:37:00', 3, 3, ''),
(146, '182TUNIS6584', 14578365, 'Esprit', 'kairouan', '2022-12-29', '09:45:00', 4, 30, ''),
(147, '175TUNIS2912', 14578365, 'Nkhilet', 'Esprit', '2022-12-23', '07:43:00', 2, 11, '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `cin` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` date NOT NULL,
  `sexe` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `nbpassager` int(11) DEFAULT NULL,
  `nbvoiture` int(11) DEFAULT NULL,
  `nbconduire` int(11) DEFAULT NULL,
  `pdp` int(11) NOT NULL,
  `service1` int(11) DEFAULT NULL,
  `service2` int(11) DEFAULT NULL,
  `service3` int(11) DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`cin`, `nom`, `prenom`, `phone`, `dob`, `sexe`, `email`, `mdp`, `nbpassager`, `nbvoiture`, `nbconduire`, `pdp`, `service1`, `service2`, `service3`, `tarif`) VALUES
(14514587, 'hela', 'ben ahmed', 56440100, '1999-09-06', 0, 'hela123@gmail.com', '8ac14a284bf08c308e6547c9664d9c14', NULL, 1, 2, 1, 1, 1, 1, 7),
(14578365, 'Ben Saad', 'Syrine', 56235148, '2003-01-15', 0, 'syrinebensaad@gmail.com', 'c50b6c61dba4e03c59018bea39773b0c', NULL, 2, 2, 1, NULL, NULL, NULL, NULL),
(14867362, 'Kaffel', 'Ahmed', 97325369, '2002-06-20', 1, 'ahmedkaffel@gmail.com', 'ed5766f9c16f708c203948d4c7304297', NULL, 2, 2, 5, NULL, NULL, NULL, NULL),
(14869536, 'Ben Ahmed', 'Sarra', 57236598, '1999-06-19', 0, 'sarrabenahmed@gmail.com', '4ba0491a786bec179d21d6252859d998', NULL, 1, 2, 1, NULL, NULL, NULL, NULL),
(15250422, 'HAYDER', 'ABDELLAOUI', 92165016, '2002-06-18', 1, 'haidaran2002@gmail.com', 'f6f55b343dcdd4e175b01451a85dde97', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL),
(19419487, 'hela', 'zayed', 56450700, '2002-05-21', 0, 'hela@gmail.com', '1f2cdca76c98e9ca6c3dcce83628a1e5', NULL, 1, 2, 8, 0, 1, 0, 5),
(19619622, 'ahmed', 'mnasri', 92751741, '2000-12-06', 1, 'mnasri@gmail.com', '71994b0657b65a77cc68d920bcfae882', NULL, 2, 2, 1, 1, 1, 1, 4),
(33355544, 'Goal', 'Digger', 55555555, '2002-05-21', 0, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 0, 0, 0, 6, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `matricule` varchar(20) NOT NULL,
  `idcfk` int(100) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `photo` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`matricule`, `idcfk`, `marque`, `couleur`, `type`, `photo`) VALUES
('150TUNIS8909', 14867362, 'Audi', 'Blanche', 'Climatise', '150.jpg'),
('175TUNIS2912', 14578365, 'Peugeot', 'Grise', 'Bio', '175.jpg'),
('182TUNIS6584', 14578365, 'Dacia', 'Beige', 'Bio', '182.jpg'),
('186TUNIS7153', 14869536, 'BMW', 'Noir', 'Climatise', '186.jpeg'),
('213TUNIS788', 19619622, 'mercedes', 'noir', 'classe', 'user.jpg'),
('217TUNIS5024', 14867362, 'Ibiza', 'Blanche', 'Bio', '217.jpg'),
('341TUNIS788', 14514587, 'fiat', 'bleu', 'confort', 'testimonial-1.jpg'),
('471TUNIS4566', 19419487, 'bmw', 'blanc', 'confort', 'testimonial-3.jpg'),
('541TUNIS1221', 19619622, 'toyota', 'noire', 'climatisé', 'testimonial-2.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cinClient` (`cinClient`);

--
-- Index pour la table `avispc`
--
ALTER TABLE `avispc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_avis_trajet` (`idtrajet`),
  ADD KEY `cinClient` (`cinClient`);

--
-- Index pour la table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cinClient` (`cinClient`);

--
-- Index pour la table `rescon`
--
ALTER TABLE `rescon`
  ADD PRIMARY KEY (`idrescon`),
  ADD KEY `fk_cin_cin` (`cin`),
  ADD KEY `fk_cinclient_cin` (`cinClient`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idres`),
  ADD KEY `idtrajet` (`idtrajet`),
  ADD KEY `cinClient` (`cinClient`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`idt`),
  ADD KEY `trajet_idc_cin` (`idc`),
  ADD KEY `matricule` (`matricule`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cin`) USING BTREE;

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `fk_idcfk_cin` (`idcfk`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `avispc`
--
ALTER TABLE `avispc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123509;

--
-- AUTO_INCREMENT pour la table `rescon`
--
ALTER TABLE `rescon`
  MODIFY `idrescon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1294;

--
-- AUTO_INCREMENT pour la table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `idt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`cinClient`) REFERENCES `user` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `avispc`
--
ALTER TABLE `avispc`
  ADD CONSTRAINT `avispc_ibfk_1` FOREIGN KEY (`cinClient`) REFERENCES `user` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `avispc_ibfk_2` FOREIGN KEY (`idtrajet`) REFERENCES `trajet` (`idt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `reclamation_ibfk_1` FOREIGN KEY (`cinClient`) REFERENCES `user` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rescon`
--
ALTER TABLE `rescon`
  ADD CONSTRAINT `fk_cin_cin` FOREIGN KEY (`cin`) REFERENCES `user` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cinclient_cin` FOREIGN KEY (`cinClient`) REFERENCES `user` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idtrajet`) REFERENCES `trajet` (`idt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`cinClient`) REFERENCES `user` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `trajet_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `voiture` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trajet_idc_cin` FOREIGN KEY (`idc`) REFERENCES `user` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `fk_idcfk_cin` FOREIGN KEY (`idcfk`) REFERENCES `user` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
