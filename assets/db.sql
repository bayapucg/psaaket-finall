/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.31-MariaDB : Database - psaaket
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`psaaket` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `psaaket`;

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(12) DEFAULT NULL,
  `f_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contact_address` varchar(250) DEFAULT NULL,
  `permanent_address` varchar(250) DEFAULT NULL,
  `role_name` varchar(250) DEFAULT NULL,
  `employee_id` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `employe_type` varchar(250) DEFAULT NULL,
  `salary_details` varchar(250) DEFAULT NULL,
  `e_email_work` varchar(250) DEFAULT NULL,
  `e_password` varchar(250) DEFAULT NULL,
  `e_org_password` varchar(250) DEFAULT NULL,
  `document` varchar(250) DEFAULT NULL,
  `working_days` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `login_status` int(12) DEFAULT '0',
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `employees` */

insert  into `employees`(`e_id`,`role_id`,`f_name`,`l_name`,`mobile`,`email`,`contact_address`,`permanent_address`,`role_name`,`employee_id`,`designation`,`employe_type`,`salary_details`,`e_email_work`,`e_password`,`e_org_password`,`document`,`working_days`,`status`,`created_at`,`updated_at`,`created_by`,`login_status`) values (1,1,'dd','hgf','7013319036','admin@gmail.com','7013319036','kadapa','','','dg','Full-time','1200','admin@gmail.com','','','','120',1,'2019-02-22 14:48:35','2019-02-22 14:48:35',1,1),(12,2,'dd','hgf','7013319036','admin@gmail.com','7013319036','kadapa',NULL,NULL,'DESIGANATION',NULL,'1200','siva@gmail.com',NULL,NULL,'','120',1,'2019-02-22 13:39:30','2019-02-22 13:39:30',1,0),(13,2,'dd','hgf','7013319036','admin@gmail.com','7013319036','kadapa',NULL,NULL,'ui',NULL,'1200','siva@gmail.com',NULL,NULL,'','120',1,'2019-02-22 13:41:26','2019-02-22 13:41:26',1,0);

/*Table structure for table `employees_data` */

DROP TABLE IF EXISTS `employees_data`;

CREATE TABLE `employees_data` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_id` int(12) DEFAULT NULL,
  `role_id` int(12) DEFAULT NULL,
  `f_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `contact_address` varchar(250) DEFAULT NULL,
  `permanent_address` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `employe_type` varchar(250) DEFAULT NULL,
  `salary_details` varchar(250) DEFAULT NULL,
  `e_email_work` varchar(250) DEFAULT NULL,
  `e_password` varchar(250) DEFAULT NULL,
  `e_org_password` varchar(250) DEFAULT NULL,
  `document` varchar(250) DEFAULT NULL,
  `working_days` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `login_status` int(12) DEFAULT '0',
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `employees_data` */

insert  into `employees_data`(`emp_id`,`e_id`,`role_id`,`f_name`,`l_name`,`mobile`,`email`,`contact_address`,`permanent_address`,`designation`,`employe_type`,`salary_details`,`e_email_work`,`e_password`,`e_org_password`,`document`,`working_days`,`status`,`created_at`,`updated_at`,`created_by`,`login_status`) values (1,NULL,2,'dd','hgf','7013319036','vasu@gmail.com','7013319036','kadapa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2019-02-22 11:53:15','2019-02-22 11:53:15',1,0);

/*Table structure for table `login_details` */

DROP TABLE IF EXISTS `login_details`;

CREATE TABLE `login_details` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_id` int(11) DEFAULT NULL,
  `e_login_time` datetime DEFAULT NULL,
  `e_logout_time` datetime DEFAULT NULL,
  `l_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `login_details` */

insert  into `login_details`(`l_id`,`e_id`,`e_login_time`,`e_logout_time`,`l_date`,`created_by`) values (1,1,'2019-02-21 10:24:36','2019-02-21 11:25:27','2019-02-21 00:00:00',NULL),(2,2,'2019-02-21 11:16:51','2019-02-21 11:24:50','2019-02-21 00:00:00',NULL),(3,1,'2019-02-22 05:47:59','2019-02-22 14:36:43','2019-02-22 00:00:00',NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`role_id`,`role`,`status`,`created_at`,`updated_at`) values (1,'Director',1,'2019-02-21 12:21:59','2019-02-21 12:22:02'),(2,'Head of the institute',1,'2019-02-21 12:22:56','2019-02-21 12:22:58'),(3,'Hr',1,'2019-02-21 12:23:16','2019-02-21 12:23:18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
