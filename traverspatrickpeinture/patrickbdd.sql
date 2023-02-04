-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 07 juin 2022 à 01:17
-- Version du serveur : 10.6.7-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `patrickbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id_devis` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id_devis`, `nom`, `prenom`, `email`, `tel`, `lieu`, `message`) VALUES
(1, 'tra', 'pat', 'charlely11@icloud.com', '0647335024', 'l\'Agiel', 'vdsqvdsvs'),
(2, 'Travers', 'Charlély', 'charlely11@icloud.com', '0647537454', 'grez', 'gzer'),
(3, 'Travers', 'Charlély', 'charlely11@icloud.com', '0647537454', 'vdfsv', 'vfdsvvfdvfdvfdvfsvfdsvfdvsd'),
(4, 'Travers', 'Charlély', 'charlely11@icloud.com', '0647537454', 'vfd', 'vfds'),
(5, 'Travers', 'Charlély', 'charlely11@icloud.com', '0647537454', 'ldd', 'ah frezgergerg verzgrez frafrez frezf'),
(6, 'Travers', 'Charlély', 'charlely11@icloud.com', '0647537454', 'laigle', 'dsqvds vdsqvds fvsqdqs fdqsfds feqfeza veqfeq vever'),
(7, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'laigle', 'fvdsv vver verzver'),
(8, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'vfdvfdvdfsvfd vfsvdvfvsdf je vuex mangrer des pates a l aigle'),
(9, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'dfsbbdf'),
(10, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'gzgegrezgregrzzgzre'),
(11, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'zegerzgergegrez'),
(12, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'gzeregrgergregzrgerz'),
(13, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'dsfbbfdsbfdfbsd'),
(14, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'vfdvs'),
(15, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'vdqsvdsvqdsvdsq'),
(16, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'vfdsvdfvfds vdfsvfdvfsvfvf'),
(17, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigke', 'vdvfvfdvdsf'),
(18, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'vfdsvfdvsfd vfdsvfdv dsfvsdvdfvs'),
(19, 'travers', 'charlély', 'charlely11@icloud.com', '0642537454', 'l aigle', 'hetrhrt'),
(20, 'travers', 'travevfdvfvdsf', 'charlely11@icloud.com', '0642537454', 'l aigle', 'vvdfvfdvfdvfd'),
(21, 'travers', 'char', 'charlely11@icloud.com', '0642537454', 'l aigle', 'vvfdvdsvf grezgrezg fzegre');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id_devis`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id_devis` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
