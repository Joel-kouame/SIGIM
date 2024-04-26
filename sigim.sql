-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 avr. 2024 à 16:46
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sigim`
--

-- --------------------------------------------------------

--
-- Structure de la table `alergie`
--

CREATE TABLE `alergie` (
  `id` int(6) NOT NULL,
  `id_prosante` int(6) NOT NULL,
  `id_patient` int(6) NOT NULL,
  `nom_alergie` varchar(255) NOT NULL,
  `reaction_alergique` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `alergie`
--

INSERT INTO `alergie` (`id`, `id_prosante`, `id_patient`, `nom_alergie`, `reaction_alergique`, `date`) VALUES
(2, 63, 64, 'Papaye', 'boutton sur les corps, le visage et la main', '2024-03-21 12:14:09'),
(3, 63, 65, 'kjhgfdsq', 'fiop^poiuytrd', '2024-03-21 12:14:43');

-- --------------------------------------------------------

--
-- Structure de la table `alert_notif`
--

CREATE TABLE `alert_notif` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_exp` int(10) UNSIGNED NOT NULL,
  `id_dest` int(10) UNSIGNED NOT NULL,
  `message` varchar(50) NOT NULL,
  `vue_notif` tinyint(4) NOT NULL DEFAULT 0,
  `date_notif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `receiver_id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Non lu',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `chats`
--

INSERT INTO `chats` (`id`, `sender_id`, `receiver_id`, `message`, `status`, `created_at`, `updated_at`) VALUES
(14, 63, 64, 'Bonjourcomment te porte tu ?', '1', '2024-03-12 11:12:34', '2024-03-12 11:12:34'),
(15, 63, 65, 'Bonjour Kossia', '0', '2024-03-12 13:39:06', '2024-03-12 13:39:06'),
(16, 63, 64, 'ffrrt', '1', '2024-03-12 16:10:27', '2024-03-12 16:10:27'),
(17, 63, 65, 'bonjour GNIN', '0', '2024-03-19 10:35:01', '2024-03-19 10:35:01'),
(18, 67, 65, 'joel', '0', '2024-03-22 14:04:40', '2024-03-22 14:04:40'),
(19, 65, 67, 'ggggg', '1', '2024-03-22 14:49:29', '2024-03-22 14:49:29'),
(20, 64, 63, 'BONJOUR GRANDO', '1', '2024-03-22 17:00:46', '2024-03-22 17:00:46'),
(21, 63, 64, 'BONSOIR PETIT', '1', '2024-03-22 17:01:45', '2024-03-22 17:01:45'),
(22, 64, 63, 'SALUT DOCTEUR', '1', '2024-03-22 17:03:08', '2024-03-22 17:03:08'),
(23, 63, 64, 'Bonsoir', '1', '2024-03-22 17:22:55', '2024-03-22 17:22:55'),
(24, 64, 67, 'Bonjour Docteur', '1', '2024-03-26 12:27:43', '2024-03-26 12:27:43');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `id` int(15) NOT NULL,
  `id_patient` int(15) NOT NULL,
  `id_prosante` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `poids` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL,
  `tension` varchar(255) NOT NULL,
  `temperature` varchar(255) NOT NULL,
  `observation` varchar(255) NOT NULL,
  `examen` varchar(255) NOT NULL,
  `medicament1` varchar(255) NOT NULL,
  `medicament2` varchar(255) NOT NULL,
  `medicament3` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`id`, `id_patient`, `id_prosante`, `date`, `poids`, `taille`, `tension`, `temperature`, `observation`, `examen`, `medicament1`, `medicament2`, `medicament3`, `created_at`, `updated_at`) VALUES
(21, 65, 63, '2024-03-20 07:24:14', '46KG', '1m68', '10', '37', 'Alergie de la peau ', 'EXAMEN 1', 'creme bg22c / 1fois par jour au couché', 'creme TTCD / 1fois par jour au les matins', 'KKJ / 1 par jour', '2024-03-20 06:24:14.000000', '2024-03-20 06:24:14.000000'),
(22, 64, 63, '2024-03-21 09:44:29', '65 KG', '1 m 79', '10', '37', 'INDIGESTION, DOULEUR ABDOMINALE', 'EXAMEN 1', 'METRODINAZOLE / 2 fois par jour', 'Paracétamol / 1 fois par jour', '', '2024-03-21 08:44:29.000000', '2024-03-21 08:44:29.000000'),
(23, 65, 67, '2024-03-22 13:45:57', '46KG', '1m80', '10', '37', 'douleur', 'EXAMEN 1', 'creme bg22c / 1fois par jour au couché', '', 'KKJ / 1 par jour', '2024-03-22 12:45:57.000000', '2024-03-22 12:45:57.000000'),
(24, 64, 67, '2024-03-26 12:27:17', '65 KG', '1 m 79', '10', '37', 'joem', 'EXAMEN 2', '', '', '', '2024-03-26 11:27:17.000000', '2024-03-26 11:27:17.000000');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `email`, `message`, `created_at`, `updated_at`) VALUES
(10, 'ncj,k,k,sk', 'kkskss@gmail.com', 'kkdkdkd', '2024-04-09 12:29:36', '2024-04-09 12:29:36');

-- --------------------------------------------------------

--
-- Structure de la table `fablabs`
--

CREATE TABLE `fablabs` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `domicile` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `fablabs`
--

INSERT INTO `fablabs` (`id`, `photo`, `nom`, `prenom`, `email`, `contact`, `domicile`, `mdp`, `lien`, `status`) VALUES
(2, 'uploads/images/1711646991_082452e1e0e7ec26291e.jpg', 'KOUAME', 'KOUAKOU JOEL', 'kouak019@gmail.com', '0701020304', 'Adjamé', '$2y$10$Q4usuulshUbHpA0YNmpZbuhnSeFGNclA2fgQGMm5oq19qfIVVsXVW', '5bd2f2a10e239c5ae9fc37a6e632d149d85234cc', 0);

-- --------------------------------------------------------

--
-- Structure de la table `hopital`
--

CREATE TABLE `hopital` (
  `id` int(10) UNSIGNED NOT NULL,
  `num_ident_hopt` varchar(50) NOT NULL,
  `contact_hopt` varchar(50) NOT NULL,
  `code_postal` varchar(50) DEFAULT NULL,
  `local_hopt` varchar(50) DEFAULT NULL,
  `nom_hopt` varchar(255) NOT NULL,
  `photo_hopt` varchar(255) NOT NULL,
  `email_hopt` varchar(255) NOT NULL,
  `type_etablissement_hopt` varchar(255) NOT NULL,
  `nom_dr` varchar(50) NOT NULL,
  `prenom_dr` varchar(50) NOT NULL,
  `contact_dr` varchar(50) NOT NULL DEFAULT '',
  `type_de_piece_dr` varchar(50) NOT NULL,
  `email_dr` varchar(255) NOT NULL,
  `fichier_piece_dr` varchar(255) NOT NULL,
  `password_hopt` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `hopital`
--

INSERT INTO `hopital` (`id`, `num_ident_hopt`, `contact_hopt`, `code_postal`, `local_hopt`, `nom_hopt`, `photo_hopt`, `email_hopt`, `type_etablissement_hopt`, `nom_dr`, `prenom_dr`, `contact_dr`, `type_de_piece_dr`, `email_dr`, `fichier_piece_dr`, `password_hopt`, `lien`, `status`, `created_at`, `updated_at`) VALUES
(1, '1234567890', '01020304', NULL, 'ABIDJAN, Adjame', 'HOPITALE GENERALE D\'ADJAME', 'uploads/images/1711677961_b5d53177442b009fae91.jpg', 'kouamejoel983@gmail.com', 'hopital public', 'TUO', 'SEYDOU', '01020304', 'Attestation d\'identité', 'seydou@gmail.com', 'uploads/fichier_hopital/1709135780_2c8333f89371465bfb5c.png', '$2y$10$Ccx1yXPjfVFDk8hSs4L4F.HteRSjnmXNxOyYuRDxUd7lcv1c4olY6', '84bed22dea73c5ebe84f6e2a18ef7d699928498a', 0, '2024-04-15 10:19:39', '2024-04-15 10:19:39'),
(2, '12345678909876543', '07010203', NULL, 'Plateau, la ran', 'FORMATION SANITAIRE URBAINE', 'uploads/images/1713135065_15e6197270959e100148.jpg', 'formationsanitaireurbaine@gmail.com', 'hopital public', 'BASQUE', 'Edmond', '07010203', 'Attestation d\'identité', 'basqueedmond@gmail.com', 'uploads/fichier_hopital/1711036983_720d47675e916492b263.png', '$2y$10$jfeVhd/bNjYfpGaaJAJyBeGzxClkMGVm4dhrkRhWFwlTZ/pNXwbTi', '6d6b0775d15e07a219020fc0167099bf0dcea1a6', 0, '2024-04-15 10:00:21', '2024-04-15 10:00:21');

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `boite_postal` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `information`
--

INSERT INTO `information` (`id`, `telephone`, `email`, `adress`, `boite_postal`, `facebook`, `whatsapp`) VALUES
(1, '0701020304', 'fablabsigim@gmail.com', 'Abidjan Cocody Deux-Plateau, rue K4 (GPS : 5.357177, -4.001287)', '28 BP 536 Abidjan 28 - Côte d\'Ivoire', 'www.facebook.com', 'www.whatsapp.com');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `id` int(15) NOT NULL,
  `nom_medicament` varchar(250) NOT NULL,
  `posologie` varchar(250) NOT NULL,
  `id_patient` int(6) NOT NULL,
  `id_prosante` int(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `id_hopital` int(6) NOT NULL,
  `medicament_id` int(11) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `lieu_habitation` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type_piece` varchar(255) NOT NULL,
  `nom_urgence` varchar(255) NOT NULL,
  `contact_urgent` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `groupe_sanguin` varchar(255) NOT NULL,
  `maladie_particuliere` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `qr_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `user_id`, `id_hopital`, `medicament_id`, `identifiant`, `nom`, `prenom`, `date_de_naissance`, `lieu_naissance`, `sexe`, `profession`, `lieu_habitation`, `telephone`, `photo`, `type_piece`, `nom_urgence`, `contact_urgent`, `parent`, `groupe_sanguin`, `maladie_particuliere`, `lien`, `status`, `qr_image`, `created_at`, `updated_at`) VALUES
(169, 64, 0, 0, 'NH8439N°1', 'N\'GUESSAN', 'HILARION', '2024-03-07', 'Abidjan, Treichville', 'Masculin', 'ETUDIANT', 'Abidjan, Adjamé', '0757719315', 'uploads/images/1710239646_1a65e7ba600242a44379.png', '', 'N\'GUESSAN CHRISTELLE', '0787440931', 'Frère / Soeur', '', '', 'cccc0c4f7daca9357ef237ecd945f4caa2194958', 0, 'uploads/qrcode/1709648681.png', '2024-04-10 13:03:32', '2024-04-10 13:03:32'),
(170, 65, 0, 0, 'GK6296N°170', 'GNIN', 'Kossia', '2000-10-01', 'cocody', 'Feminin', 'commercial', 'Abidjan, Adjamé', '0749664327', 'uploads/images/1710250995_22aef7625fb5e970a3e9.png', '', 'GNIN ROLAND', '0787440931', '', '', '', 'c25a980755146d52bc2eac9fde4079759bd304bf', 0, 'uploads/qrcode/1710250372.png', '2024-03-19 11:00:32', '2024-03-19 11:00:32'),
(172, 69, 1, 0, 'KJ4719N°171', 'KOUAME', 'Joel', '2000-02-14', 'Yamoussoukro', 'Masculin', 'Developpeur web/Mobile', 'Abidjan, Adjamé, Camp-fonctionnaire', '0757719315', 'uploads/images/1713111801_abd0e910437785f4983d.jpg', '', 'N\'GUESSAN CHRISTELLE', '0701020304', 'Frère / Soeur', '', '', '9bfad1df7599778aa90ae6619b1b46e32f78396a', 0, 'uploads/qrcode/1713111269.png', '2024-04-14 16:35:52', '2024-04-14 16:35:52');

-- --------------------------------------------------------

--
-- Structure de la table `prosantes`
--

CREATE TABLE `prosantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `id_hopital` int(6) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `status` int(6) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `piece` varchar(255) DEFAULT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `domicile` varchar(255) DEFAULT NULL,
  `contact` varchar(250) DEFAULT NULL,
  `type_de_piece` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `prosantes`
--

INSERT INTO `prosantes` (`id`, `user_id`, `id_hopital`, `reference`, `status`, `nom`, `prenom`, `service`, `photo`, `piece`, `lien`, `profession`, `domicile`, `contact`, `type_de_piece`, `created_at`, `updated_at`) VALUES
(18, 63, 1, 'REF: NM4413N°1', 1, 'N\'GUESSAN', 'Mauro', 'PEDIATRIE', 'uploads/images/1711645879_d4ea32164d3c86984f7d.png', NULL, '80545b41c67df5c80973ecbd2cd6d4d4a3f4218b', 'SAGE-FEMME', 'Abidjan, Adjamé, Forum', '0787440931', '', '2024-03-28 17:14:33', '2024-03-28 17:14:33'),
(19, 66, 0, 'REF: KK9597N°19', 0, 'KOUAME', 'KEVIN', 'CHURIGIE PLASTIQUE', '', NULL, 'd19523966e20c845ca7e00887cadee58976e4283', 'MEDECIN', NULL, '0701020304', NULL, '2024-03-21 18:57:45', '2024-03-21 18:57:45'),
(20, 67, 2, 'REF: BA6767N°20', 0, 'BELLY', 'Ange Amou', 'GYNECOLOGIE', 'uploads/images/1712757172_04c0f7ba5f0b169df09d.png', NULL, 'f977e0610802eed677ac7f6192c0f1ce5ca08c4b', 'MEDECIN', 'Abobo, rue 13', '0701020304', '', '2024-04-10 13:52:52', '2024-04-10 13:52:52');

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `id_hopital` int(6) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `prenom` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `motif` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `id_hopital` int(11) NOT NULL DEFAULT 0,
  `nom_service` varchar(50) NOT NULL,
  `nom_responsable` varchar(50) NOT NULL,
  `contact_responsable` varchar(50) NOT NULL,
  `nbre_intervenant` int(11) NOT NULL DEFAULT 0,
  `date_creation` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `id_hopital`, `nom_service`, `nom_responsable`, `contact_responsable`, `nbre_intervenant`, `date_creation`, `description`) VALUES
(9, 1, 'CHIRURGIE GENERALE', 'BLE GERMAIN', '0102030405', 4, '2024-02-26', 'CONSULTATION, OPERATION, SITURATION'),
(10, 2, 'OPHTAMOLOGIE', 'DR AMANZOU', '+225 0701020304', 5, '2024-03-28', 'SERVICE DE TRAITEMENT DES YEUX '),
(11, 1, 'CABINET DENTAIRE', 'MR KOUASSI', '0102030405', 4, '2024-03-28', 'S\'OCCUPE DE LA SANTE DENTAIRE');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL,
  `role` enum('patient','prosante','admin','hopital') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `mdp`, `user_status`, `role`, `created_at`, `updated_at`) VALUES
(63, 'kouak019@gmail.com', '$2y$10$iWPWkuQiTHivT85Yrl0FvO5oO7z4ztpds1Ld25h1FdqCMm9aWEUF2', 0, 'prosante', '2024-03-28 17:15:21', '2024-03-28 17:15:21'),
(64, 'landry@gmail.com', '$2y$10$qI4hJa/OwUe7I4NIAMK2.ecF8jK4MqLW8f./V99/TTvXSl.1LOYSm', 1, 'patient', '2024-04-12 19:58:31', '2024-04-12 19:58:31'),
(65, 'kossia@gmail.com', '$2y$10$bY/IrBozMl4bpX3zExWOvOsrTu.ilLkftlhKTadbTPRRYLmcuC46u', 0, 'patient', '2024-03-22 15:47:22', '2024-03-22 15:47:22'),
(66, 'koffi2.kouame@uvci.edu.ci', '$2y$10$iyEMsTnapJnM15NAx23vuut2SVEqKMqmbU7.aAwgkL6xRL1SOBgAS', 0, 'prosante', '2024-03-15 16:11:01', '2024-03-15 16:11:01'),
(67, 'ange.belli@uvci.edu.ci', '$2y$10$9KBp5.J5yzI/Rfn30H1eZedGI5bwCGITiW4khHPc/qIvEiTsmIUnu', 0, 'prosante', '2024-04-15 08:32:27', '2024-04-15 08:32:27'),
(69, 'joel@gmail.com', '$2y$10$1FPAESKxkqM9B.1xNmEn3uw1er.odc7V/O6HygPoEQnRwixD5Io2S', 0, 'patient', '2024-04-15 08:28:03', '2024-04-15 08:28:03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alergie`
--
ALTER TABLE `alergie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `alert_notif`
--
ALTER TABLE `alert_notif`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `fablabs`
--
ALTER TABLE `fablabs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hopital`
--
ALTER TABLE `hopital`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `prosantes`
--
ALTER TABLE `prosantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`patient_id`) USING BTREE;

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hopital` (`id_hopital`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alergie`
--
ALTER TABLE `alergie`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `alert_notif`
--
ALTER TABLE `alert_notif`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `fablabs`
--
ALTER TABLE `fablabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `hopital`
--
ALTER TABLE `hopital`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT pour la table `prosantes`
--
ALTER TABLE `prosantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
