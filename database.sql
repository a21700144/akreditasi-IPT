/*
SQLyog Enterprise v13.1.1 (64 bit)
MySQL - 10.5.8-MariaDB-log : Database - app-aipt
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`app-aipt` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `app-aipt`;

/*Table structure for table `tbl_main` */

DROP TABLE IF EXISTS `tbl_main`;

CREATE TABLE `tbl_main` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama_pt` varchar(80) NOT NULL,
  `akred_saatini` varchar(2) NOT NULL,
  `tahun_akademik` varchar(12) NOT NULL,
  `program_pt` int(2) NOT NULL,
  `jml_dtps` int(2) NOT NULL,
  `jml_dtps_s3` int(2) NOT NULL,
  `jml_dtps_rektor` int(2) NOT NULL,
  `jml_dtps_lektor_kepala` int(2) NOT NULL,
  `jml_dtps_lektor` int(2) NOT NULL,
  `eva_kuri` int(2) NOT NULL,
  `capai_lajar` int(2) NOT NULL,
  `struk_kuri` int(2) NOT NULL,
  `mutu_upps` int(2) NOT NULL,
  `dikti_upps` int(2) NOT NULL,
  `tracer_study` int(2) NOT NULL,
  `jml_lulus_ts4` int(2) NOT NULL,
  `jml_lulus_ts3` int(2) NOT NULL,
  `jml_lulus_ts2` int(2) NOT NULL,
  `jml_lulus_lacak_ts4` int(2) NOT NULL,
  `jml_lulus_lacak_ts3` int(2) NOT NULL,
  `jml_lulus_lacak_ts2` int(2) NOT NULL,
  `jml_lulus_nilai_ts4` int(2) NOT NULL,
  `jml_lulus_nilai_ts3` int(2) NOT NULL,
  `jml_lulus_nilai_ts2` int(2) NOT NULL,
  `waktutunggu_ts4` int(2) NOT NULL,
  `waktutunggu_ts3` int(2) NOT NULL,
  `waktutunggu_ts2` int(2) NOT NULL,
  `sesuaibidang_ts4` int(2) NOT NULL,
  `sesuaibidang_ts3` int(2) NOT NULL,
  `sesuaibidang_ts2` int(2) NOT NULL,
  `puasguna_tekno` int(2) NOT NULL,
  `puasguna_komun` int(2) NOT NULL,
  `puasguna_ilmu` int(2) NOT NULL,
  `puasguna_tim` int(2) NOT NULL,
  `puasguna_asing` int(2) NOT NULL,
  `puasguna_kembang` int(2) NOT NULL,
  `puasguna_etika` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_main` */

insert  into `tbl_main`(`id`,`nama_pt`,`akred_saatini`,`tahun_akademik`,`program_pt`,`jml_dtps`,`jml_dtps_s3`,`jml_dtps_rektor`,`jml_dtps_lektor_kepala`,`jml_dtps_lektor`,`eva_kuri`,`capai_lajar`,`struk_kuri`,`mutu_upps`,`dikti_upps`,`tracer_study`,`jml_lulus_ts4`,`jml_lulus_ts3`,`jml_lulus_ts2`,`jml_lulus_lacak_ts4`,`jml_lulus_lacak_ts3`,`jml_lulus_lacak_ts2`,`jml_lulus_nilai_ts4`,`jml_lulus_nilai_ts3`,`jml_lulus_nilai_ts2`,`waktutunggu_ts4`,`waktutunggu_ts3`,`waktutunggu_ts2`,`sesuaibidang_ts4`,`sesuaibidang_ts3`,`sesuaibidang_ts2`,`puasguna_tekno`,`puasguna_komun`,`puasguna_ilmu`,`puasguna_tim`,`puasguna_asing`,`puasguna_kembang`,`puasguna_etika`) values 
(7,'STMIK Sumedang - Teknik Informatika','A','2018/2019',9,12,5,5,6,3,3,2,2,1,2,2,1,30,35,40,1,35,35,30,25,2,13,12,15,15,15,2,2,2,4,3,3,3);

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `username` varchar(24) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`username`,`password`,`email`) values 
(01,'admin','admin','mylipho60@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
