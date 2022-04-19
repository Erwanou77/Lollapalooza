-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 avr. 2022 à 09:51
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbo_lollapalooza`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `contact`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `contact` (IN `nom_contact` VARCHAR(255), IN `prenom_contact` VARCHAR(255), IN `mail_contact` VARCHAR(512), IN `message_contact` TEXT)  BEGIN

INSERT INTO t_contact (nom_contact,prenom_contact,mail_contact,message_contact) VALUES (nom_contact,prenom_contact,mail_contact,message_contact);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `t_contact`
--

DROP TABLE IF EXISTS `t_contact`;
CREATE TABLE IF NOT EXISTS `t_contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom_contact` varchar(255) NOT NULL,
  `prenom_contact` varchar(255) NOT NULL,
  `mail_contact` varchar(512) NOT NULL,
  `message_contact` text NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
