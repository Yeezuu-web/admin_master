# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.18-MariaDB)
# Database: file_id_db
# Generation Time: 2021-05-26 12:39:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_of_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resolution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m-e` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khmer_dub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_received` date NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer_promo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `synopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `period_of_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `content_id`, `title_of_content`, `type_of_content`, `type_of_file`, `episode`, `duration`, `file_extension`, `resolution`, `m-e`, `khmer_dub`, `path`, `storage`, `date_received`, `year`, `poster`, `trailer_promo`, `synopsis`, `file_size`, `start_date`, `end_date`, `period_of_time`, `remark`, `created_at`, `updated_at`)
VALUES
	(2,'Autem minima vel quo','Voluptatem nisi arc','Ut at sunt non dolor','Est culpa laudantiu','Aut sit id fuga De','Non consequatur Ips','Provident qui aliqu','Similique proident','Dolorem elit ad vit','Dolore adipisicing a','Optio non quod prae','Unde in culpa dolore','1970-04-17','1975','Possimus ut incidid','Ullam qui porro sed','Quidem omnis anim ea','Fugiat esse quasi do','1976-12-30','1970-10-20','Consequatur nisi ven','Repudiandae est odit','2021-05-26 10:23:33','2021-05-26 10:23:33'),
	(3,'Nostrum quia volupta','Do deserunt distinct','Rem cumque dolores r','Rerum nobis aut dese','Quis dolor minus cup','Non obcaecati odit s','Voluptatum cupidatat','Do aut nulla veritat','Nisi consequat Mole','Ullam exercitationem','Distinctio Recusand','Et voluptates et ull','2020-12-27','1981','Sequi quae ut et est','Reprehenderit in exe','Enim consequuntur au','Minim magnam non quo','2011-09-23','2013-12-26','Ut consequatur Aut','Commodo ipsum illum','2021-05-26 11:08:39','2021-05-26 11:08:39'),
	(5,'Corporis eligendi ve','Consectetur debitis','Qui rerum vitae qui','Et molestiae quod li','Quis amet doloribus','Id at velit nihil p','Aliqua Ullam et ali','Elit irure et ullam','Qui tempora eveniet','Deleniti irure nemo','Dolor voluptatem qui','Ut magnam commodo ip','1989-12-07','2012','Est dolorum ipsam o','Omnis quaerat consec','Ex saepe nisi incidi','Consequatur tempora','2012-10-08','1976-12-07','Ea non ad sequi et a','Sit cillum in archi','2021-05-26 11:31:03','2021-05-26 11:31:03');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_100000_create_password_resets_table',1),
	(2,'2019_08_19_000000_create_failed_jobs_table',1),
	(3,'2021_05_14_080143_create_permissions_table',1),
	(4,'2021_05_14_080325_create_roles_table',1),
	(5,'2021_05_14_080328_create_users_table',1),
	(6,'2021_05_14_080450_create_permission_role_pivot_table',1),
	(7,'2021_05_14_080526_create_role_user_pivot_table',1),
	(8,'2021_05_25_075520_create_files_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table permission_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `role_id` bigint(20) unsigned NOT NULL,
  `permission_id` bigint(20) unsigned NOT NULL,
  KEY `role_id_fk_3900395` (`role_id`),
  KEY `permission_id_fk_3900395` (`permission_id`),
  CONSTRAINT `permission_id_fk_3900395` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_id_fk_3900395` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;

INSERT INTO `permission_role` (`role_id`, `permission_id`)
VALUES
	(1,1),
	(1,2),
	(1,3),
	(1,4),
	(1,5),
	(1,6),
	(1,7),
	(1,8),
	(1,9),
	(1,10),
	(1,11),
	(1,12),
	(1,13),
	(1,14),
	(1,15),
	(1,16),
	(1,17),
	(2,17),
	(1,18),
	(1,19),
	(1,20),
	(1,21),
	(1,22);

/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'user_management_access',NULL,NULL,NULL),
	(2,'permission_create',NULL,NULL,NULL),
	(3,'permission_edit',NULL,NULL,NULL),
	(4,'permission_show',NULL,NULL,NULL),
	(5,'permission_delete',NULL,NULL,NULL),
	(6,'permission_access',NULL,NULL,NULL),
	(7,'role_create',NULL,NULL,NULL),
	(8,'role_edit',NULL,NULL,NULL),
	(9,'role_show',NULL,NULL,NULL),
	(10,'role_delete',NULL,NULL,NULL),
	(11,'role_access',NULL,NULL,NULL),
	(12,'user_create',NULL,NULL,NULL),
	(13,'user_edit',NULL,NULL,NULL),
	(14,'user_show',NULL,NULL,NULL),
	(15,'user_delete',NULL,NULL,NULL),
	(16,'user_access',NULL,NULL,NULL),
	(17,'profile_password_edit',NULL,NULL,NULL),
	(18,'file_create','2021-05-26 10:10:56','2021-05-26 10:10:56',NULL),
	(19,'file_access','2021-05-26 10:13:00','2021-05-26 10:13:00',NULL),
	(20,'file_show','2021-05-26 10:28:02','2021-05-26 10:28:02',NULL),
	(21,'file_edit','2021-05-26 10:28:09','2021-05-26 10:28:09',NULL),
	(22,'file_delete','2021-05-26 10:28:15','2021-05-26 10:28:15',NULL);

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table role_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  KEY `user_id_fk_3900404` (`user_id`),
  KEY `role_id_fk_3900404` (`role_id`),
  CONSTRAINT `role_id_fk_3900404` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_id_fk_3900404` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;

INSERT INTO `role_user` (`user_id`, `role_id`)
VALUES
	(1,1),
	(2,1);

/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Admin',NULL,NULL,NULL),
	(2,'User',NULL,NULL,NULL);

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Admin','admin@admin.com',NULL,'$2y$10$8vjCqtJCnZo58pshus9SmunSO/z1Bn3Vh0/j90evJbC.fhDyDTiym',NULL,NULL,NULL,NULL),
	(2,'Major tech','admin@gmail.com',NULL,'$2y$10$Ee2bPFzhWOfu/5mHWy3vw.QNHcqwejhr0W0BUTodg1Sp1Q32XBH0a',NULL,'2021-05-26 11:45:18','2021-05-26 11:45:26','2021-05-26 11:45:26');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
