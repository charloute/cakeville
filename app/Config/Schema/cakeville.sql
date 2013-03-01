# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Hôte: localhost (MySQL 5.5.25)
# Base de données: cakeville
# Temps de génération: 2013-03-01 15:29:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table ads
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ads`;

CREATE TABLE `ads` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `message` text,
  `title` varchar(100) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `revue_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;

INSERT INTO `ads` (`id`, `message`, `title`, `user_id`, `revue_id`)
VALUES
	(1,'Ceci est un message','Titre',1,NULL),
	(2,'Un article','Un titre',1,NULL),
	(4,'Encore un test','test',1,2),
	(5,'une add','le titre de la add',1,1),
	(6,'test pr revue et add','revue et add',1,2),
	(7,'lala','POUET',1,3),
	(8,'dernier test','BORDEL',1,1),
	(9,'Test finale juste pr verifier tu vois','ca devrait etre bon',4,3);

/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table badges
# ------------------------------------------------------------

DROP TABLE IF EXISTS `badges`;

CREATE TABLE `badges` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table badges_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `badges_users`;

CREATE TABLE `badges_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `badge_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Affichage de la table games
# ------------------------------------------------------------

DROP TABLE IF EXISTS `games`;

CREATE TABLE `games` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;

INSERT INTO `games` (`id`, `name`)
VALUES
	(1,'portal'),
	(2,'halo'),
	(3,'world of warcraft'),
	(4,'pokemon'),
	(5,'rayman'),
	(6,'fifa');

/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table games_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `games_users`;

CREATE TABLE `games_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `games_users` WRITE;
/*!40000 ALTER TABLE `games_users` DISABLE KEYS */;

INSERT INTO `games_users` (`id`, `game_id`, `user_id`)
VALUES
	(2,5,2),
	(3,3,3),
	(4,4,3),
	(5,3,9),
	(6,4,9),
	(9,4,10),
	(10,5,10),
	(11,3,11),
	(14,1,1),
	(15,2,1),
	(16,4,1),
	(17,6,1);

/*!40000 ALTER TABLE `games_users` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table genders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `genders`;

CREATE TABLE `genders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `genders` WRITE;
/*!40000 ALTER TABLE `genders` DISABLE KEYS */;

INSERT INTO `genders` (`id`, `name`)
VALUES
	(1,'Femme'),
	(2,'Homme');

/*!40000 ALTER TABLE `genders` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `name`)
VALUES
	(1,'les timides'),
	(2,'les coquines'),
	(3,'les intellos'),
	(4,'les grandes gueules'),
	(5,'les sportives'),
	(6,'les aventurieres'),
	(7,'les ecolos'),
	(8,'les geekettes'),
	(9,'les feministes'),
	(10,'les soumises'),
	(11,'les vegetariennes'),
	(12,'les coucounings');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table hobbies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hobbies`;

CREATE TABLE `hobbies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `hobbies` WRITE;
/*!40000 ALTER TABLE `hobbies` DISABLE KEYS */;

INSERT INTO `hobbies` (`id`, `name`)
VALUES
	(1,'natation'),
	(2,'guitare'),
	(3,'cinema'),
	(4,'voyage'),
	(5,'peinture'),
	(6,'peche');

/*!40000 ALTER TABLE `hobbies` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table hobbies_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hobbies_users`;

CREATE TABLE `hobbies_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hobby_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `hobbies_users` WRITE;
/*!40000 ALTER TABLE `hobbies_users` DISABLE KEYS */;

INSERT INTO `hobbies_users` (`id`, `hobby_id`, `user_id`)
VALUES
	(1,4,3),
	(2,2,3),
	(5,3,9),
	(6,4,9),
	(9,1,10),
	(10,2,10),
	(11,2,11),
	(14,3,1),
	(15,4,1),
	(16,5,1),
	(17,6,1);

/*!40000 ALTER TABLE `hobbies_users` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `dest_id` int(11) DEFAULT NULL,
  `content` text,
  `date` timestamp NULL DEFAULT NULL,
  `statut` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `user_id`, `dest_id`, `content`, `date`, `statut`)
VALUES
	(1,1,2,'Un message ','2013-03-01 16:28:18','unread'),
	(2,1,4,'Salut !','2013-03-01 16:28:33','unread'),
	(3,3,2,'He tu dates ?','2013-03-01 16:28:46','unread');

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table movies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;

INSERT INTO `movies` (`id`, `name`)
VALUES
	(1,'psychose'),
	(2,'inception'),
	(3,'bienvenue chez les chtis'),
	(4,'le diable s\'habille en prada'),
	(5,'saw'),
	(6,'l\'effet papillon'),
	(7,'American Pie'),
	(8,'Barbie');

/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table movies_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `movies_users`;

CREATE TABLE `movies_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `movies_users` WRITE;
/*!40000 ALTER TABLE `movies_users` DISABLE KEYS */;

INSERT INTO `movies_users` (`id`, `movie_id`, `user_id`)
VALUES
	(3,3,2),
	(8,2,3),
	(9,1,3),
	(10,3,9),
	(11,4,9),
	(14,3,10),
	(15,4,10),
	(16,3,11),
	(17,2,13),
	(18,2,14),
	(19,2,15),
	(24,2,1),
	(25,3,1),
	(26,4,1),
	(27,1,1),
	(28,5,1),
	(29,6,1),
	(30,7,1),
	(31,8,1),
	(32,1,4),
	(33,2,4);

/*!40000 ALTER TABLE `movies_users` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table pictures
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pictures`;

CREATE TABLE `pictures` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(300) DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;

INSERT INTO `pictures` (`id`, `url`, `user_id`, `name`)
VALUES
	(2,'charlotte2.jpg',1,NULL),
	(3,'jaouad1.jpg',9,NULL),
	(4,'charlotte3.jpg',1,NULL);

/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table pokes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pokes`;

CREATE TABLE `pokes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `dest_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `pokes` WRITE;
/*!40000 ALTER TABLE `pokes` DISABLE KEYS */;

INSERT INTO `pokes` (`id`, `user_id`, `dest_id`, `created`)
VALUES
	(1,1,NULL,'2013-02-27 12:16:27');

/*!40000 ALTER TABLE `pokes` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table revues
# ------------------------------------------------------------

DROP TABLE IF EXISTS `revues`;

CREATE TABLE `revues` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `revues` WRITE;
/*!40000 ALTER TABLE `revues` DISABLE KEYS */;

INSERT INTO `revues` (`id`, `date`, `title`)
VALUES
	(1,'2013-02-25 14:05:00','Prince charmant'),
	(2,'2013-02-24 14:41:00','Un prince presque charmant'),
	(3,'2013-02-27 11:43:00','Nouvelle revue de Vanessa La folle');

/*!40000 ALTER TABLE `revues` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `age`, `sexe`, `group_id`, `password`, `sexe_id`, `picture_id`)
VALUES
	(1,'cha','72','',6,'ef4f02c2ef239da0be2d95fa06a3b96e0424c039',1,NULL),
	(2,'sego','25','',1,'e28a4bde27090352f2fd5bcbaead71ac17090451',1,NULL),
	(3,'stou','36','',3,'e28a4bde27090352f2fd5bcbaead71ac17090451',1,NULL),
	(4,'vanessa','45','',4,'e28a4bde27090352f2fd5bcbaead71ac17090451',1,NULL),
	(5,'alex','50','',5,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(6,'hugo','45','',1,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(7,'jean-charles','32','',2,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(8,'henri-du-92','23','',3,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(9,'Jaouad','45','',4,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(10,'charlie','32','',4,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(11,'monsieur truc','48','',4,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(12,'gasp','32','',1,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(13,'jr','22','',3,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(14,'jr2','22','',3,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(15,'jr','22','',3,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL),
	(16,'gasp2','32','',1,'e28a4bde27090352f2fd5bcbaead71ac17090451',2,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
