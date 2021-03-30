-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 30 mars 2021 à 14:13
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webcam`
--

-- --------------------------------------------------------

--
-- Structure de la table `snapshot`
--

CREATE TABLE `snapshot` (
  `Id` int(11) NOT NULL,
  `Image` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `z_user`
--

CREATE TABLE `z_user` (
  `id` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `z_user`
--

INSERT INTO `z_user` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'eliemwez', 'elie@gmail.com', '$2y$10$CR.8MiBqCplYfWEgaFOy5ecFOptwAp3mTU61T3ITbyBJybOBfIkPO', 'image_1617103766.png'),
(2, 'eliemwez', 'elie@gmail.com', '$2y$10$CR.8MiBqCplYfWEgaFOy5ecFOptwAp3mTU61T3ITbyBJybOBfIkPO', 'image_1617103766.png'),
(3, 'erickb', 'ban@congoagile.com', '$2y$10$rZhfbhwZHE/XL8Kqoahy3Ogn/BnrOqCTs8k.kvK5fhCz/JFzg7c0i', 'image_1617104233.png'),
(4, 'erickb', 'ban@congoagile.com', '$2y$10$rZhfbhwZHE/XL8Kqoahy3Ogn/BnrOqCTs8k.kvK5fhCz/JFzg7c0i', 'image_1617104233.png'),
(5, 'sysadmin', 'sysadmin@gmail.com', '$2y$10$aDZQaOcrHdOA6YMmsHucUerv2L1YUoQCuYo3wMDh71DtfBQ3Gy67u', 'image_1617104457.png'),
(6, 'sysadmin2', 'sysadmin2@gmail.com', '$2y$10$PQJFAsmkL3Si0nxr.MX0nOVp1hRvzHHIHMmc4fVsZfJERLAtsu7ca', 'image_1617104646.png'),
(7, 'kiloo@gmail.com', 'kiloo@gmail.com', '$2y$10$uc0JJ4RmnlCCyg/F.CggW.biV7T612wFIY2o9Wbl73ZdE5uzF7tOe', 'image_1617106347.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `snapshot`
--
ALTER TABLE `snapshot`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `z_user`
--
ALTER TABLE `z_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `snapshot`
--
ALTER TABLE `snapshot`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `z_user`
--
ALTER TABLE `z_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
