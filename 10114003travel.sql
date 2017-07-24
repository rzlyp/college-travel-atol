/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.56-log : Database - 10114003travel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`10114003travel` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `10114003travel`;

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `kendaraan` */

insert  into `kendaraan`(`id_kendaraan`,`nama_kendaraan`,`kapasitas_kendaraan`,`id_users`) values (2,'Toyota Hiace',12,3),(3,'Nissan Evalia',12,3),(4,'Isuzu Elf Minibus',24,3),(21,'Suzuki Elf',20,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

/*Data for the table `pembeli` */

insert  into `pembeli`(`id_pembeli`,`nama_pembeli`,`alamat`,`no_hp`,`created_at`,`updated_at`) values (9,'Ratna Sari','Jalan Surapati','082784949941','2017-07-13 15:20:17','2017-07-13 15:20:17'),(10,'Eminem','Los Angeles','08578939300','2017-07-13 15:23:15','2017-07-13 15:23:15'),(11,'Citra Kirana','Jalan keramat jati','082184849112','2017-07-13 15:26:51','2017-07-13 15:26:51'),(12,'Christiano Ronaldo','Jalan Dipatiukur No. 101 , Bandung','081238920012','2017-07-13 16:12:02','2017-07-13 16:12:02'),(13,'Faisal Ishak','Rancaenkek','08567839103','2017-07-19 14:36:00','2017-07-19 14:36:00'),(14,'Adam Mukharil','Bogor','0812332883','2017-07-19 14:40:32','2017-07-19 14:40:32'),(15,'Suyatna','Jalan Cikopo','081806839121','2017-07-19 14:51:31','2017-07-19 14:51:31'),(16,'Suyatna','Jalan Cikopo','081806839121','2017-07-19 14:53:04','2017-07-19 14:53:04'),(17,'Bayu Wijaya','Punclut, Bandung','081237999393','2017-07-19 14:56:12','2017-07-19 14:56:12'),(18,'Dani Suhendra','Jalan dipatiukur No. 18 , Bandung','085768939920','2017-07-19 14:58:38','2017-07-19 14:58:38'),(19,'Dian Dharmayanti','Jalan Cikopo Indah','081243657335','2017-07-19 15:14:58','2017-07-19 15:14:58'),(20,'Supratman','Jalan tubagus atas No. 20','081909929291','2017-07-19 15:17:41','2017-07-19 15:17:41'),(21,'Iqbal Mahdi','Cimahi','085755787087','2017-07-19 15:21:23','2017-07-19 15:21:23'),(31,'Suryadi','Jalan Banda No. 18 Bandung','08768939911','2017-07-24 09:06:09','2017-07-24 09:06:09'),(41,'Fitri Febrianti','Jalan Cimaung No.19 , Bandung','0894738123','2017-07-24 09:09:59','2017-07-24 09:09:59');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(100) NOT NULL AUTO_INCREMENT,
  `id_pembeli` int(100) DEFAULT NULL,
  `jumlah_tiket` int(10) DEFAULT NULL,
  `status_jemput` tinyint(1) DEFAULT NULL,
  `tgl_keberangkatan` date DEFAULT NULL,
  `jam_keberangkatan` time DEFAULT NULL,
  `id_tujuan` int(20) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`id_pembeli`,`jumlah_tiket`,`status_jemput`,`tgl_keberangkatan`,`jam_keberangkatan`,`id_tujuan`,`total_harga`,`created_at`,`updated_at`,`id_user`) values (9,9,2,1,'2017-07-16','07:03:00',2,150000,'2017-07-13 15:20:18','2017-07-13 15:20:18',3),(10,10,1,1,'2017-07-17','21:00:00',3,80000,'2017-07-13 15:23:15','2017-07-13 15:23:15',3),(11,11,2,1,'2017-07-14','21:00:00',4,400000,'2017-07-13 15:26:51','2017-07-13 15:26:51',3),(12,12,2,1,'2017-07-14','20:00:00',4,400000,'2017-07-13 16:12:02','2017-07-13 16:12:02',6),(13,13,2,1,'2017-07-20','03:00:00',3,160000,'2017-07-19 14:36:00','2017-07-19 14:36:00',3),(14,14,1,1,'2017-07-20','17:00:00',2,75000,'2017-07-19 14:40:32','2017-07-19 14:40:32',3),(15,15,1,1,'2017-07-20','08:00:00',5,25000,'2017-07-19 14:51:31','2017-07-19 14:51:31',3),(16,16,1,1,'2017-07-20','08:00:00',5,25000,'2017-07-19 14:53:04','2017-07-19 14:53:04',3),(17,17,1,1,'2017-07-21','08:00:00',6,100000,'2017-07-19 14:56:12','2017-07-19 14:56:12',3),(18,18,3,0,'2017-07-20','07:00:00',8,720000,'2017-07-19 14:58:38','2017-07-19 14:58:38',3),(19,19,2,1,'2017-07-20','01:00:00',4,400000,'2017-07-19 15:14:58','2017-07-19 15:14:58',3),(20,20,2,0,'2017-07-24','14:00:00',5,50000,'2017-07-19 15:17:42','2017-07-19 15:17:42',3),(21,21,2,1,'2017-07-20','13:00:00',5,50000,'2017-07-19 15:21:23','2017-07-19 15:21:23',3),(31,31,3,1,'2017-07-25','21:59:00',7,840000,'2017-07-24 09:06:11','2017-07-24 09:06:11',3),(41,41,1,1,'2017-07-26','14:00:00',2,75000,'2017-07-24 09:10:01','2017-07-24 09:10:01',3);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tujuan` */

insert  into `tujuan`(`id_tujuan`,`kode_tujuan`,`nama_tujuan`,`tarif`,`id_kendaraan`,`id_user`) values (2,'JKT901','Jakarta',75000,2,3),(3,'TS901','Tasik Malaya',80000,3,3),(4,'YG013','Yogyakarta',200000,2,3),(5,'RNC001','Rancaengkek',25000,4,3),(6,'BG021','Bogor',100000,4,3),(7,'ML024','Malang',350000,4,3),(8,'SR901','Surabaya',300000,3,3);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` text,
  `role` enum('petugas','admin') DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'im-photo-placeholder.png',
  `remember_token` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`username`,`password`,`role`,`foto`,`remember_token`) values (1,'Admin Travelkita','travelkita','$2y$10$ATfeZEvrm8A.67uwSmkmJeVnjcNH7y7YzlsS2BnY7Bzj7SZfmRBD2','admin','im-photo-placeholder.png','DsieV8uBjIXWH5b9TKjdfdKxtsjkyI5edf6gnZSksO9Jd9i7OOWWyJypBe5u'),(3,'Firman Nizammudin Fakhrul','firmannf','$2y$10$DAXnVqGHSLRn1TChj8auduNXRA8flOG2vvqKLezRfdhJDCFZ97PjC','petugas','im-photo-placeholder.png','N55dQRfb4uvguzpbMKiI2UCsNJOFRy5gikt7l5sdAhXxrQXf1AH6gViUAw2C'),(4,'Taufiq Harisa Maulana','taufiq','$2y$10$7n7MX9aatR6Bz68FPV8O4ejuBD5jHv4am4Eog86XZb9hqvG0fMvaO','petugas','im-photo-placeholder.png',''),(6,'Go Karno','gokano','$2y$10$qSj23YN0ggWTmigZovr.7.Bl1FnuK.SD6jXlmnwtICVeLve8tQYIm','petugas','go-karno.jpg','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
