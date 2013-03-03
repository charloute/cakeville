-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 03 Mars 2013 à 22:16
-- Version du serveur: 5.5.9
-- Version de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cakeville`
--

-- --------------------------------------------------------

--
-- Structure de la table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `message` text,
  `title` varchar(100) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `revue_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `ads`
--

INSERT INTO `ads` VALUES(1, 'Ceci est un message', 'Titre', 1, NULL);
INSERT INTO `ads` VALUES(2, 'Un article', 'Un titre', 1, NULL);
INSERT INTO `ads` VALUES(4, 'Encore un test', 'test', 1, 2);
INSERT INTO `ads` VALUES(5, 'une add', 'le titre de la add', 1, 1);
INSERT INTO `ads` VALUES(6, 'test pr revue et add', 'revue et add', 1, 2);
INSERT INTO `ads` VALUES(7, 'lala', 'POUET', 1, 3);
INSERT INTO `ads` VALUES(8, 'dernier test', 'BORDEL', 1, 1);
INSERT INTO `ads` VALUES(9, 'Test finale juste pr verifier tu vois', 'ca devrait etre bon', 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `badges`
--

CREATE TABLE `badges` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `badges`
--


-- --------------------------------------------------------

--
-- Structure de la table `badges_users`
--

CREATE TABLE `badges_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `badge_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `badges_users`
--


-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `games`
--

INSERT INTO `games` VALUES(1, 'portal');
INSERT INTO `games` VALUES(2, 'halo');
INSERT INTO `games` VALUES(3, 'world of warcraft');
INSERT INTO `games` VALUES(4, 'pokemon');
INSERT INTO `games` VALUES(5, 'rayman');
INSERT INTO `games` VALUES(6, 'fifa');

-- --------------------------------------------------------

--
-- Structure de la table `games_users`
--

CREATE TABLE `games_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `games_users`
--

INSERT INTO `games_users` VALUES(3, 3, 3);
INSERT INTO `games_users` VALUES(5, 3, 9);
INSERT INTO `games_users` VALUES(6, 4, 9);
INSERT INTO `games_users` VALUES(9, 4, 10);
INSERT INTO `games_users` VALUES(10, 5, 10);
INSERT INTO `games_users` VALUES(11, 3, 11);
INSERT INTO `games_users` VALUES(12, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `genders`
--

INSERT INTO `genders` VALUES(1, 'Femme');
INSERT INTO `genders` VALUES(2, 'Homme');

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` VALUES(1, 'les timides');
INSERT INTO `groups` VALUES(2, 'les coquines');
INSERT INTO `groups` VALUES(3, 'les intellos');
INSERT INTO `groups` VALUES(4, 'les grandes gueules');
INSERT INTO `groups` VALUES(5, 'les sportives');
INSERT INTO `groups` VALUES(6, 'les aventurieres');
INSERT INTO `groups` VALUES(7, 'les ecolos');
INSERT INTO `groups` VALUES(8, 'les geekettes');
INSERT INTO `groups` VALUES(9, 'les feministes');
INSERT INTO `groups` VALUES(10, 'les soumises');
INSERT INTO `groups` VALUES(11, 'les vegetariennes');
INSERT INTO `groups` VALUES(12, 'les coucounings');

-- --------------------------------------------------------

--
-- Structure de la table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `hobbies`
--

INSERT INTO `hobbies` VALUES(1, 'natation');
INSERT INTO `hobbies` VALUES(2, 'guitare');
INSERT INTO `hobbies` VALUES(3, 'cinema');
INSERT INTO `hobbies` VALUES(4, 'voyage');
INSERT INTO `hobbies` VALUES(5, 'peinture');
INSERT INTO `hobbies` VALUES(6, 'peche');

-- --------------------------------------------------------

--
-- Structure de la table `hobbies_users`
--

CREATE TABLE `hobbies_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hobby_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `hobbies_users`
--

INSERT INTO `hobbies_users` VALUES(2, 2, 3);
INSERT INTO `hobbies_users` VALUES(5, 3, 9);
INSERT INTO `hobbies_users` VALUES(6, 4, 9);
INSERT INTO `hobbies_users` VALUES(9, 1, 10);
INSERT INTO `hobbies_users` VALUES(10, 2, 10);
INSERT INTO `hobbies_users` VALUES(11, 2, 11);
INSERT INTO `hobbies_users` VALUES(12, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `dest_id` int(11) DEFAULT NULL,
  `content` text,
  `date` datetime DEFAULT NULL,
  `statut` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` VALUES(18, 1, 2, 'Salut ! ca va ?', '2013-03-03 21:27:01', 'unread');
INSERT INTO `messages` VALUES(19, 2, 1, 'Hey ! ca va et toi ?', '2013-03-03 21:27:13', 'unread');
INSERT INTO `messages` VALUES(20, 1, 2, 'Ca va ca va :-) Quoi de neuf ?', '2013-03-03 21:28:11', 'unread');
INSERT INTO `messages` VALUES(21, 2, 1, 'Rien de spécial .. Je dois te laisser, bisous !', '2013-03-03 21:28:36', 'unread');
INSERT INTO `messages` VALUES(22, 2, 3, 'Salut Pat'' !', '2013-03-03 21:39:46', 'unread');
INSERT INTO `messages` VALUES(25, 3, 2, 'Hola !!', '2013-03-03 22:10:10', 'unread');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `movies`
--

INSERT INTO `movies` VALUES(1, 'psychose');
INSERT INTO `movies` VALUES(2, 'inception');
INSERT INTO `movies` VALUES(3, 'bienvenue chez les chtis');
INSERT INTO `movies` VALUES(4, 'le diable s''habille en prada');
INSERT INTO `movies` VALUES(5, 'saw');
INSERT INTO `movies` VALUES(6, 'l''effet papillon');
INSERT INTO `movies` VALUES(7, 'American Pie');
INSERT INTO `movies` VALUES(8, 'Barbie');

-- --------------------------------------------------------

--
-- Structure de la table `movies_users`
--

CREATE TABLE `movies_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `movies_users`
--

INSERT INTO `movies_users` VALUES(8, 2, 3);
INSERT INTO `movies_users` VALUES(10, 3, 9);
INSERT INTO `movies_users` VALUES(11, 4, 9);
INSERT INTO `movies_users` VALUES(14, 3, 10);
INSERT INTO `movies_users` VALUES(15, 4, 10);
INSERT INTO `movies_users` VALUES(16, 3, 11);
INSERT INTO `movies_users` VALUES(17, 2, 13);
INSERT INTO `movies_users` VALUES(18, 2, 14);
INSERT INTO `movies_users` VALUES(19, 2, 15);
INSERT INTO `movies_users` VALUES(32, 1, 4);
INSERT INTO `movies_users` VALUES(33, 2, 4);
INSERT INTO `movies_users` VALUES(34, 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(300) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` VALUES(3, 'jaouad1.jpg', 9, NULL);
INSERT INTO `pictures` VALUES(10, '2013/2526.jpg', 1, 'bouh');
INSERT INTO `pictures` VALUES(11, '2013/4503.jpg', 1, 'bouh');
INSERT INTO `pictures` VALUES(12, '2013/4fd6.jpg', 2, 'bouh');

-- --------------------------------------------------------

--
-- Structure de la table `pokes`
--

CREATE TABLE `pokes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `dest_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `pokes`
--

INSERT INTO `pokes` VALUES(1, 1, NULL, '2013-02-27 12:16:27');

-- --------------------------------------------------------

--
-- Structure de la table `revues`
--

CREATE TABLE `revues` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `revues`
--

INSERT INTO `revues` VALUES(1, '2013-02-25 14:05:00', 'Prince charmant');
INSERT INTO `revues` VALUES(2, '2013-02-24 14:41:00', 'Un prince presque charmant');
INSERT INTO `revues` VALUES(3, '2013-02-27 11:43:00', 'Nouvelle revue de Vanessa La folle');

-- --------------------------------------------------------

--
-- Structure de la table `revues_users`
--

CREATE TABLE `revues_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `revue_id` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `revues_users`
--


-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(300) DEFAULT NULL,
  `age` tinytext,
  `sexe` varchar(100) DEFAULT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `password` char(50) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `picture_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` VALUES(1, 'sego', '20', 'Femme', 1, '8c72bae74e6c78a1848c115bd7a1182e84ecd661', NULL, 10);
INSERT INTO `users` VALUES(2, 'Vanessa', '19', 'Femme', 1, '8c72bae74e6c78a1848c115bd7a1182e84ecd661', NULL, 12);
INSERT INTO `users` VALUES(3, 'Patrick', '40', NULL, 10, '8c72bae74e6c78a1848c115bd7a1182e84ecd661', NULL, NULL);
