/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.9-MariaDB : Database - travelkita
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`travelkita` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `travelkita`;

/*Table structure for table `kendaraan` */

DROP TABLE IF EXISTS `kendaraan`;

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(20) NOT NULL AUTO_INCREMENT,
  `nama_kendaraan` varchar(30) DEFAULT NULL,
  `kapasitas_kendaraan` int(50) DEFAULT NULL,
  `id_users` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_kendaraan`),
  KEY `fk_id_users_kendaraan` (`id_users`),
  CONSTRAINT `fk_id_users_kendaraan` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kendaraan` */

insert  into `kendaraan`(`id_kendaraan`,`nama_kendaraan`,`kapasitas_kendaraan`,`id_users`) values (2,'Toyota Hiace',12,3),(3,'Nissan Evalia',12,3);

/*Table structure for table `pembeli` */

DROP TABLE IF EXISTS `pembeli`;

CREATE TABLE `pembeli` (
  `id_pembeli` int(100) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(100) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembeli` */

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(100) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(100) DEFAULT NULL,
  `jumlah_tiket` int(10) DEFAULT NULL,
  `tgl_keberangkatan` date DEFAULT NULL,
  `jam_keberangkatan` time DEFAULT NULL,
  `id_tujuan` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `fk_users_transaksi` (`id_user`),
  KEY `fk_id_pembeli_trans` (`id_pembeli`),
  KEY `fk_tujuan_transaksi` (`id_tujuan`),
  CONSTRAINT `fk_id_pembeli_trans` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tujuan_transaksi` FOREIGN KEY (`id_tujuan`) REFERENCES `tujuan` (`id_tujuan`),
  CONSTRAINT `fk_users_transaksi` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

/*Table structure for table `tujuan` */

DROP TABLE IF EXISTS `tujuan`;

CREATE TABLE `tujuan` (
  `id_tujuan` int(20) NOT NULL AUTO_INCREMENT,
  `kode_tujuan` varchar(50) DEFAULT NULL,
  `nama_tujuan` varchar(100) DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL,
  `id_kendaraan` int(20) DEFAULT NULL,
  `id_user` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_tujuan`),
  KEY `fk_id_kendaarn` (`id_kendaraan`),
  KEY `fk_id_users` (`id_user`),
  CONSTRAINT `fk_id_kendaarn` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_id_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tujuan` */

insert  into `tujuan`(`id_tujuan`,`kode_tujuan`,`nama_tujuan`,`tarif`,`id_kendaraan`,`id_user`) values (2,'JKT901','Jakarta',75000,2,3);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text,
  `role` enum('petugas','admin') DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`username`,`password`,`role`,`foto`,`remember_token`) values (1,'Admin Travelkita','travelkita','$2y$10$ATfeZEvrm8A.67uwSmkmJeVnjcNH7y7YzlsS2BnY7Bzj7SZfmRBD2','admin','','Kgb0AU1TX3oLfZyxyZayHaEi2hp0UaEMEviIXtcCzSTDtN7sj0AbSXaq2JCe'),(3,'Firman Nizammudin Fakhrul','firmannf','$2y$10$DAXnVqGHSLRn1TChj8auduNXRA8flOG2vvqKLezRfdhJDCFZ97PjC','petugas','','DnMrxmONXpeXR2cZJCqveXMvacU1mK474WWgz3Qf7XucDAuEScI3LHGwhNBn'),(4,'Taufiq Harisa Maulana','taufiq','$2y$10$7n7MX9aatR6Bz68FPV8O4ejuBD5jHv4am4Eog86XZb9hqvG0fMvaO','petugas','','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
