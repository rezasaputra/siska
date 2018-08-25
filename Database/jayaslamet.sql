/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.19-MariaDB : Database - jayaslamet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jayaslamet` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jayaslamet`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(200) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` tinyint(5) DEFAULT '1',
  `session_id` text,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`uid`,`picture`,`nama`,`username`,`password`,`status`,`session_id`) values (1,'Logo v4.png','Admin JS','jayaslamet','f1c5505cd39504a40a2a2c50d5e78653',1,'564d9cacf120cb388f34b4a1c78ce2adf48750a4'),(2,'img_1505322100.png','Akbar','akbar','81dc9bdb52d04dc20036dbd8313ed055',1,'5ad252bbc9175594222ac0a712169060bcf3093b');

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(40) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

insert  into `berita`(`id`,`gambar`,`judul`,`deskripsi`,`tanggal`) values (1,'img_1505268014.jpg','Raisa Menikah','Pada Tanggal 29 September','2017-09-13 09:00:15');

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(40) DEFAULT NULL,
  `status` tinyint(5) DEFAULT '1',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `galeri` */

insert  into `galeri`(`id`,`gambar`,`status`,`timestamp`) values (1,'img_1505279764.jpg',1,'2017-09-13 12:16:04'),(2,'img_1505283172.jpg',1,'2017-09-13 13:12:52'),(4,'img_1505318738.jpg',1,'2017-09-13 23:05:38'),(7,'img_1505318787.png',1,'2017-09-13 23:06:27'),(8,'img_1505318807.jpg',1,'2017-09-13 23:06:47'),(9,'img_1505318813.jpg',1,'2017-09-13 23:06:53'),(10,'img_1505318825.jpg',1,'2017-09-13 23:07:05');

/*Table structure for table `layanan` */

DROP TABLE IF EXISTS `layanan`;

CREATE TABLE `layanan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(50) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `deskripsi` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `layanan` */

insert  into `layanan`(`id`,`gambar`,`judul`,`deskripsi`,`timestamp`) values (1,'img_1505270256.jpg','Dicoba','apa saja lah','2017-09-13 09:37:36');

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(40) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `tag_line` varchar(200) DEFAULT NULL,
  `tampil` tinyint(5) DEFAULT '1',
  `status` tinyint(5) DEFAULT '1',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

insert  into `slider`(`id`,`gambar`,`judul`,`tag_line`,`tampil`,`status`,`timestamp`) values (1,'img_1505271568.jpg','dicoba','bagus keren\r\n',1,1,'2017-09-13 09:59:28'),(2,'img_1505310450.jpg','kedua','dd',1,1,'2017-09-13 20:47:30'),(3,'img_1505312439.jpg','Ketiga','isi',1,1,'2017-09-13 21:20:39');

/*Table structure for table `tentang` */

DROP TABLE IF EXISTS `tentang`;

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(50) DEFAULT NULL,
  `judul` varchar(40) DEFAULT NULL,
  `deskripsi` text,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tentang` */

insert  into `tentang`(`id`,`gambar`,`judul`,`deskripsi`,`timestamp`) values (1,'img_1505270832.jpg','Dicoba','apa aja lah','2017-09-13 09:47:12');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
