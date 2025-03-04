-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 mars 2025 à 11:35
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
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `pictures` varchar(200) NOT NULL,
  `descriptions` varchar(100) NOT NULL,
  `prix` int(20) NOT NULL,
  `quantites` int(255) NOT NULL DEFAULT 0,
  `categ` varchar(20) NOT NULL DEFAULT 'phone'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `pictures`, `descriptions`, `prix`, `quantites`, `categ`) VALUES
(35, '67bd9bf1b66004.79821216.jpg', 'ME MONR ', 100, 23, 'phone'),
(36, '67be2681795217.77297400.jpg', 'IPHPNE 16', 200, 12, 'phone'),
(37, '67bf667eb4e5f2.24312021.jpg', 'IPHONE 15', 300, 2, 'phone'),
(38, '67c1a647ed72d2.46790653.jpg', 'MAC BOOK 13 PRO', 500, 1, 'computer');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `surnames` varchar(50) NOT NULL,
  `emails` varchar(50) NOT NULL,
  `phone_num` int(9) NOT NULL,
  `passwords` int(12) NOT NULL,
  `roles` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `names`, `surnames`, `emails`, `phone_num`, `passwords`, `roles`) VALUES
(10, 'soppi', 'christ', 'soppi@gmail.com', 2223232, 2147483647, 'user'),
(11, 'ERDTFYGUH', 'TFYGUH', 'MON@gamil.com', 2147483647, 500, 'user'),
(13, 'EKANGA', 'YANNICK', 'ekanga@gmail.com', 67959815, 5994471, 'user'),
(14, 'EKANGA', 'YANNICK', 'ekangay@gmail.com', 679598158, 8, 'admin'),
(15, 'MAMADOA', 'YANNICK', 'kanga@gmail.com', 65765, 65, 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
