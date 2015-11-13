/*
SQLyog Ultimate - MySQL GUI v8.21 
MySQL - 5.6.21 : Database - pdo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `song` */

DROP TABLE IF EXISTS `song`;

CREATE TABLE `song` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(128) DEFAULT NULL,
  `title` varchar(128) NOT NULL,
  `album` varchar(255) DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `description` text,
  `release` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `userCreate` int(11) DEFAULT NULL,
  `userUpdate` int(11) DEFAULT NULL,
  `updateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `song` */

insert  into `song`(`id`,`artist`,`title`,`album`,`rate`,`description`,`release`,`status`,`userCreate`,`userUpdate`,`updateDate`,`createDate`) values (1,'LYLA','Percayakan','Percayakan',15,NULL,'2015-09-12',0,1,1,'2015-11-13 15:11:42','2015-11-13 15:11:32');
insert  into `song`(`id`,`artist`,`title`,`album`,`rate`,`description`,`release`,`status`,`userCreate`,`userUpdate`,`updateDate`,`createDate`) values (2,'Dadali','Disaat Aku Tersakiti',' Disaat Aku Tersakiti',NULL,NULL,'2015-11-13',1,NULL,NULL,'2015-11-13 16:28:11','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
