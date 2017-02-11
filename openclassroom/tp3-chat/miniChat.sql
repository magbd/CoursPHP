-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 11 Février 2017 à 09:37
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1
-- Version de PHP :  7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `miniChat`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chat`
--

INSERT INTO `chat` (`ID`, `pseudo`, `message`, `date_creation`) VALUES
(4, 'mag', '', '2017-02-10 16:35:55'),
(5, 'mag', '', '2017-02-10 16:35:55'),
(6, 'mag2', '', '2017-02-10 16:35:55'),
(7, '@mag', '', '2017-02-10 16:35:55'),
(8, '@mag', '', '2017-02-10 16:35:55'),
(9, 'mag', '', '2017-02-10 16:35:55'),
(10, 'mag', '', '2017-02-10 16:35:55'),
(11, 'mag', 'blablabla', '2017-02-10 16:35:55'),
(12, 'mag', 'blablabla', '2017-02-10 16:35:55'),
(13, '@mag', 'encore un test', '2017-02-10 16:35:55'),
(14, '@mag', 'test renvoi_chat', '2017-02-10 16:35:55'),
(15, 'mag', 'test renvoi', '2017-02-10 16:35:55'),
(16, 'mag', 'test renvoi', '2017-02-10 16:35:55'),
(17, 'mag', 'kjskjdl', '2017-02-10 16:35:55'),
(18, 'test', 'lsmlskslm', '2017-02-10 16:35:55'),
(19, 'test@mag', 'encore un test', '2017-02-10 16:35:55'),
(20, 'test@mag', 'encore un message test', '2017-02-10 16:35:55'),
(21, 'magali', 'j\'ai rÃ©ussi !!!!', '2017-02-10 16:35:55'),
(22, 'julie', 'salut !!', '2017-02-10 16:35:55'),
(23, '@mag', 'Exercice terminÃ© !', '2017-02-10 16:35:55'),
(24, 'Tom', 'Salut upto !', '2017-02-10 18:23:12'),
(25, 'Magalette', 'test cookie pseudo', '2017-02-10 19:05:34'),
(26, 'Magalette', 'YES !!', '2017-02-10 19:05:43'),
(27, 'Thomas', 'test pseudo', '2017-02-10 19:05:58');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
