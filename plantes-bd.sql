-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 déc. 2023 à 10:35
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
-- Base de données : `plantes-bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `number` int(11) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `number`, `message`) VALUES
(0, '', 'zaynebfawel2022@gmail.com', 55747471, 'bonne nuit'),
(0, '', 'zaynebfawel2022@gmail.com', 55747471, 'bonne nuit');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `titre`, `description`, `image`, `prix`) VALUES
(1, '1. Laurier-rose pour grands pots.\r\n\r\n', 'plantes à mettre dans des grands pots sur votre terrasse', 'e.jpg', 25),
(2, '2. Lilas des Indes pour grands pots.', 'plantes à mettre dans des grands pots sur votre terrasse.', 'e2.jpg', 25),
(3, '3. Olivier pour grands pots.', 'plantes à mettre dans des grands pots sur votre terrasse', 'i.jpg', 30),
(4, '4. Citronnier pour grands pots.', 'plantes à mettre dans des grands pots sur votre terrasse.', 'n.jpg', 42),
(5, '5. Rhododendron pour grands pots', 'plantes à mettre dans des grands pots sur votre terrasse.', 'e2.jpg', 22),
(6, '6. Palmier pour grands pots', 'plantes à mettre dans des grands pots sur votre terrasse.', 'e2.jpg', 22),
(7, '7. Oiseau de paradis pour grands pots.', 'plantes à mettre dans des grands pots sur votre terrasse.', 'i.jpg', 43),
(8, '8. Yucca pour grands.', 'plantes à mettre dans des grands pots sur votre terrasse.', 'z.jpg', 53),
(9, '9. Rhododendron pour grands pots.', 'plantes à mettre dans des grands pots sur votre terrasse', 'e2.jpg', 45);

-- --------------------------------------------------------

--
-- Structure de la table `sign`
--

CREATE TABLE `sign` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `adresse` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sign`
--

INSERT INTO `sign` (`id`, `nom`, `adresse`, `email`, `password`) VALUES
(1, 'zeineb', 'kairouan', 'zaynebfawel2022@gmail.com', '123456789 '),
(3, 'hadir', 'mahdia', 'hadir@gmail.com', '123456 '),
(4, 'zeineb1', 'kairouan', 'zaynebfawel98@gmail.com', '564321 '),
(5, 'jmal', 'jerba', 'jmal@gmail.com', '76534 ');

-- --------------------------------------------------------

--
-- Structure de la table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `adresse` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
