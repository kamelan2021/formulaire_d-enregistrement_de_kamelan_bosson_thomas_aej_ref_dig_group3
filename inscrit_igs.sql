-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 août 2021 à 08:52
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inscrit_igs`
--

-- --------------------------------------------------------

--
-- Structure de la table `formes`
--

CREATE TABLE `formes` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numero_aej` varchar(15) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `date_d'inscription` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formes`
--

INSERT INTO `formes` (`id`, `nom`, `prenom`, `email`, `numero_aej`, `telephone`, `fonction`, `date_d'inscription`) VALUES
(1, 'KAMELAN', 'BOSSON THOMAS', 'antoinerobinet10@gmail.com', '21458693 06', '0709596625', 'Développeur Web et Mobile', '2021-08-18 20:28:12'),
(2, 'kassi', 'gerard', 'antoinerobinet10@gmail.com', '21458693 06', '0709596641', 'Developpeur Data IA', '2021-08-18 20:29:56'),
(3, 'KAMELAN', 'BOSSON THOMAS', 'kamelanbosson201199@gmail.com', '20218693 06', '0506853775', 'D&eacute;veloppeur Web et Mobile', '2021-08-18 20:32:43'),
(4, 'Thomas', 'BOSSON THOMAS', 'kamelanbosson201199@gmail.com', '20218693 06', '0709596641', 'D&eacute;veloppeur Web et Mobile', '2021-08-19 01:41:39'),
(5, 'jean', 'gerard', '56962819@vfggt', '21458693 02', '0709596625', 'Rferent Digital', '2021-08-19 06:28:42'),
(6, 'konan', 'ange', 'ko@angmail.com', '1254886965', '0158976254', 'Rferent Digital', '2021-08-19 06:35:49'),
(7, 'konan', 'ange', 'ko@angmail.com', '1254886965', '0158976254', 'Rferent Digital', '2021-08-19 06:38:39'),
(8, 'koffi', 'kouadjo celestin', 'koffi@kouad.com', '20458796 05', '0528658535', 'Developpeur Data IA', '2021-08-19 09:38:27'),
(9, 'kassi', 'ange', 'aze@aze.fr', '1254886965', '0158976254', 'D&eacute;veloppeur Web et Mobile', '2021-08-19 11:05:25'),
(10, 'jean', 'ange', 'kof@gn.com', '21458693 06', '0506853775', 'Referent Digital', '2021-08-19 11:40:29'),
(11, 'koffi', 'kouam&eacute;', 'ko@kgmail.com', '1958885248hgrrz', 'azeza', 'D&eacute;veloppeur Web et Mobile', '2021-08-19 14:05:42'),
(13, 'Thomas', 'BOSSON THOMAS', 'kof@gn.com', '20218693 06', '0158976254', 'D&eacute;veloppeur Web et Mobile', '2021-08-20 00:43:27'),
(14, '&lt;strong&gt;kamelan&lt;/strong&gt;', 'BOSSON THOMAS', 'kamelanbosson201199@gmail.com', '20218693 06', '0709596625', 'D&eacute;veloppeur Web et Mobile', '2021-08-20 09:32:31'),
(15, 'Thomas', '&lt;strong&gt;bosson thomas&lt;/trong&gt;', 'kof@gn.com', '1254886965', '0709596625', 'D&eacute;veloppeur Data IA', '2021-08-20 09:37:42'),
(16, 'test', 'test', 'test@gmail.com', '1111111', '11111111', 'D&eacute;veloppeur Data IA', '2021-08-20 17:04:49'),
(17, 'Thomas', 'BOSSON THOMAS', 'kamelanbosson201199@gmail.com', '21458693 06', '0709596641', 'D&eacute;veloppeur Data IA', '2021-08-20 17:05:09'),
(18, 'Agoh', 'yanick', 'ago@ya.gmail.com', '194587625 05', '0158769534', 'Referent Digital', '2021-08-21 06:44:28');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formes`
--
ALTER TABLE `formes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formes`
--
ALTER TABLE `formes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
