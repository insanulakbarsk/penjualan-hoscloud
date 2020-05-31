-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hoscloud_database
CREATE DATABASE IF NOT EXISTS `hoscloud_database` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hoscloud_database`;

-- Dumping structure for table hoscloud_database.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'berisi nama file image saja tanpa path',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_type_unique` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hoscloud_database.categories: ~15 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `type`, `image`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Router', 'wirelles-tools', 'category_images/Rc6L00KwV9UdXbrDdOFRfrSUfmvsBH6nI89JhBSd.jpeg', 1, 1, NULL, NULL, '2020-05-29 11:30:18', '2020-05-29 12:44:36'),
	(2, 'Briker', 'billing-tools', 'category_images/9gi4u1uQZ3Nn2lj0YssWYUbg4Y9yj1W9gwUvA8if.jpeg', 1, 1, NULL, NULL, '2020-05-29 11:36:26', '2020-05-29 11:54:03'),
	(3, 'IP Phone', 'telephoni', 'category_images/0YUsFvPXjoX5OEhVmmvVpZ1AfT0noDvTLPuQwJeq.jpeg', 1, NULL, NULL, NULL, '2020-05-29 11:38:07', '2020-05-29 12:24:31'),
	(4, 'LAN', 'wire', 'category_images/WNXEGBN6S9PGVO55EshKb4p5cx8rrXi4GqkxhQy4.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:47:01', '2020-05-29 12:47:01'),
	(8, 'RJ45', 'wire-tools', 'category_images/NVPcSQDIR7QEpuaBQHfyZJSPdZgGlj5cApTNTbdt.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:49:26', '2020-05-29 12:49:26'),
	(9, 'Laptop', 'operasional', 'category_images/arh6pTPIKs4g4XYz8VckLB5JEuSOeBXKxjzofgaF.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:50:05', '2020-05-29 12:50:05'),
	(10, 'Charge', 'operasional-tools', 'category_images/k5eZStOSGNfn3M4xu2zwEMyGqlqc97TlcSCm0paV.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:50:24', '2020-05-29 12:50:24'),
	(11, 'Computer', 'operasional-tool', 'category_images/529JKTJLCQ3Fs8jSVG9yDT5h4akB5ppJx7x9PoAr.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:51:22', '2020-05-29 12:51:22'),
	(12, 'Computer Processing Unit', 'computer-tools', 'category_images/UW6ipy42o8zRqZwI4GJfYlC3j4JKWp9lEiiT4VK7.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:52:36', '2020-05-29 12:52:36'),
	(13, 'Modulator Demodulator', 'computer-tool', 'category_images/got2bifAghAXIwjZIUGQkijWSsyhbiHyLo5v9eRn.jpeg', 1, NULL, NULL, '2020-05-29 12:55:11', '2020-05-29 12:54:46', '2020-05-29 12:55:11'),
	(14, 'RJ25', 'cable-tools', 'category_images/7UyecfBel4wt8HZtpwbo7VCrb7dYH8sdii05NX7u.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:56:19', '2020-05-29 12:56:19'),
	(17, 'RJ25', 'cable-tool', 'category_images/bIraCZPECwRaYi8C93hedmEUvVAQPWSAYqxwDrPA.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:56:27', '2020-05-29 12:56:27'),
	(18, 'RJ21', 'cabel', 'category_images/HtvEvD96ZkQdmDQT7XR6Xr3jv3Jz8hLmpcLdk8N1.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:56:40', '2020-05-29 12:56:40'),
	(19, 'Cisco Tools', 'telecomunication-tools', 'category_images/tlBWAG7wMiaTzGTVA8344ChAK0Apec00kB6HWuOV.jpeg', 1, NULL, NULL, NULL, '2020-05-29 12:57:02', '2020-05-29 12:57:02'),
	(20, 'Mouse', 'perangkat-computer', 'category_images/x1cbzLrZ3EL3WOsiSEgfS3vjJu5iM7ysvSsXSMwR.jpeg', 1, NULL, NULL, '2020-05-30 12:08:01', '2020-05-30 12:06:39', '2020-05-30 12:08:01');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table hoscloud_database.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hoscloud_database.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table hoscloud_database.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hoscloud_database.migrations: ~7 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_05_29_065032_penyesuaian_table_users', 2),
	(5, '2020_05_29_111102_create_table_categories', 3),
	(6, '2020_05_29_125831_create_tools_table', 4),
	(7, '2020_05_29_130437_create_tools_category_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table hoscloud_database.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hoscloud_database.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table hoscloud_database.tools
CREATE TABLE IF NOT EXISTS `tools` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `views` int(10) unsigned NOT NULL DEFAULT 0,
  `stock` int(10) unsigned NOT NULL DEFAULT 0,
  `status` enum('PUBLISH','DRAFT') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hoscloud_database.tools: ~12 rows (approximately)
/*!40000 ALTER TABLE `tools` DISABLE KEYS */;
INSERT INTO `tools` (`id`, `title`, `type`, `description`, `sales`, `price`, `views`, `stock`, `status`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Router', 'wireless-tools-telco', 'Stock Tersedia', 'Afiqa Santika', 20.00, 0, 24, 'PUBLISH', 1, 1, NULL, '2020-05-29 13:48:31', '2020-05-29 15:03:40', NULL),
	(11, 'Briker', 'billing-tools', 'Stock Tersedia', 'Larasati Wijaksono', 90000.00, 0, 6, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:23:41', '2020-05-30 05:23:41', NULL),
	(12, 'IP Phone', 'telephoni', 'Stock Habis', 'Wira Negara', 80000.00, 0, 0, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:24:24', '2020-05-30 05:24:24', NULL),
	(13, 'LAN', 'wire', 'Kualitas terjamin', 'Meira Chantika', 80000.00, 0, 3, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:25:16', '2020-05-30 05:25:16', NULL),
	(14, 'RJ45', 'wire-tools', 'Stock Tersedia', 'Jaka Perdana', 50000.00, 0, 7, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:28:23', '2020-05-30 05:28:23', NULL),
	(15, 'Laptop', 'operasiona', 'Tersedia Dengan jenis berbagai', 'Randi Prawira', 600000.00, 0, 29, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:29:36', '2020-05-30 05:29:36', NULL),
	(16, 'Charge', 'operasional-tools', 'Kualitas terjamin', 'Wira Sadana', 100000.00, 0, 40, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:30:17', '2020-05-30 05:30:17', NULL),
	(17, 'Computer', 'operasional-tool', 'Stock tersedia', 'Sadana Agung', 800000.00, 0, 6, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:31:06', '2020-05-30 05:31:06', NULL),
	(18, 'Control Processing Unit', 'computer-tools', 'CPU', 'Sayarita', 900000.00, 0, 10, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:31:47', '2020-05-30 05:31:47', NULL),
	(19, 'RJ25', 'cable-tools', 'Cable', 'Muhammad Irfan', 90000.00, 0, 16, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:32:10', '2020-05-30 05:32:10', NULL),
	(20, 'Cisco Tools', 'telecomunication-tools', 'Cisco', 'Dendi', 70000.00, 0, 18, 'PUBLISH', 1, NULL, NULL, '2020-05-30 05:33:17', '2020-05-30 05:33:17', NULL),
	(21, 'Mouse', 'perangkat-computer', 'Stock Terbatas', 'Ferdinan', 90000.00, 0, 2, 'PUBLISH', 1, NULL, NULL, '2020-05-30 12:08:46', '2020-05-30 12:08:59', '2020-05-30 12:08:59');
/*!40000 ALTER TABLE `tools` ENABLE KEYS */;

-- Dumping structure for table hoscloud_database.tools_category
CREATE TABLE IF NOT EXISTS `tools_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tools_id` int(10) unsigned DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tools_category_tools_id_foreign` (`tools_id`),
  KEY `tools_category_category_id_foreign` (`category_id`),
  CONSTRAINT `tools_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `tools_category_tools_id_foreign` FOREIGN KEY (`tools_id`) REFERENCES `tools` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hoscloud_database.tools_category: ~0 rows (approximately)
/*!40000 ALTER TABLE `tools_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `tools_category` ENABLE KEYS */;

-- Dumping structure for table hoscloud_database.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hoscloud_database.users: ~11 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `roles`, `address`, `phone`, `avatar`, `status`) VALUES
	(1, 'Site Administrator', 'administrator@hoscloud.id', NULL, '$2y$10$63UHHuuN2jLhGjFWDZG17ebCAIN6cDT6Ok47OcdSRI234.oJhCSp6', NULL, '2020-05-29 07:03:25', '2020-05-29 07:03:25', 'administrator', '["ADMIN"]', 'Pekanbaru', '085265413875', 'saat-ini-tidak-ada-file.png', 'ACTIVE'),
	(3, 'Insanul Akbar.S.K', 'insanul.akbar@hoscloud.id', NULL, '$2y$10$veYbjBrfoPoSX/IazkvdCOqQbMl.6K8wxOWc4prwJDPts/J54maZa', NULL, '2020-05-29 09:46:42', '2020-05-29 09:46:42', 'Insanul', '["STAFF"]', 'Pekanbaru, Riau', '089870800909', 'avatars/THquRD8xGTI1twFsSs3YO25pBVyejfakhiXi6ltp.jpeg', 'ACTIVE'),
	(4, 'Reynaldi', 'reynaldi@hoscloud.id', NULL, '$2y$10$3.K0qqEz4NuUey7XX6m9K.jqHxajPM03UZtUV4y9cQbOu2uG./s7C', NULL, '2020-05-29 10:42:06', '2020-05-29 10:42:06', 'Rey', '["CUSTOMER"]', 'Dumai', '08797927817', 'avatars/9IQmQTdDlg03JyxVnVi80G2FlcyUd0H2vAviZ6QK.jpeg', 'ACTIVE'),
	(5, 'Rafiq Kusuma', 'kusuma@hoscloud.id', NULL, '$2y$10$avuOa0MBfJnhOpveQUW9Ve9JaiDJDco5lgsn5f2D2CnRMqN4PJweC', NULL, '2020-05-29 10:43:02', '2020-05-29 10:43:02', 'Rafiq', '["CUSTOMER"]', 'Pekanbaru', '089878987382', 'avatars/GEUZblmFIpUEYcupPXAy3QBBpuhcGfNpmDRPNjhn.jpeg', 'ACTIVE'),
	(6, 'Benny Satria', 'benny.satria@hoscloud.id', NULL, '$2y$10$Q5noJxv.QG2h6nC2ku4phuAk0K7YHU301Of1a8njWTga7Z7ZBsiFu', NULL, '2020-05-29 10:44:26', '2020-05-29 10:44:26', 'Benny', '["CUSTOMER"]', 'Dumai', '088198007688', 'avatars/4ffeuPxVenGRY8rTX1EUZbXUpvggCG1pUIaFPDXs.jpeg', 'ACTIVE'),
	(7, 'Adinda Citra', 'adinda.citra@hoscloud.id', NULL, '$2y$10$Nyljr.YaHSXF4zotAf/ZNOtC5rV.g2rSaq2QERbfxMpxhxRumluTm', NULL, '2020-05-29 10:45:37', '2020-05-29 10:45:37', 'Adinda', '["CUSTOMER"]', 'Bengkalis, Riau', '097800002343', 'avatars/PHYgDiHXKv87qP8VeC3pmE4h22Ilb3xBvfLqNCU3.jpeg', 'ACTIVE'),
	(8, 'Mey Fatihul Intan', 'fatihul.intan@hoscloud.id', NULL, '$2y$10$M3yvUJ51YZmb2ScqzppiU.NbBdNxqHt6.QhW.MDX7/HPMaHYTLv0m', NULL, '2020-05-29 10:46:42', '2020-05-29 10:46:42', 'Intan', '["STAFF"]', 'Pelalawan, Riau', '085687282718', 'avatars/S2eDOHH4dNX7MKkDwQX4WhRi8eudVYY7wCnzAWjG.jpeg', 'ACTIVE'),
	(9, 'Bintang Raditya', 'bintang.raditya@hoscloud.id', NULL, '$2y$10$/USY3BARKR9ELaMKI81CIO9GHjvek9z488fqKP6xySyLhuKz6XNFy', NULL, '2020-05-29 10:48:43', '2020-05-29 10:48:43', 'Bintang', '["ADMIN"]', 'Jakarta', '087899996767', 'avatars/SojFyu4zXZIuEm5ABzexkKvf90esHoFTQLGYzG0m.jpeg', 'ACTIVE'),
	(10, 'Muhammad Romadhan', 'muhammad.roma@hoscloud.id', NULL, '$2y$10$IctCTwTf4DWXGeFGU4SNfuXkazWa4S6W9dmCW9cGO276JUsr8pbMK', NULL, '2020-05-29 10:49:38', '2020-05-29 10:49:38', 'Roma', '["STAFF","CUSTOMER"]', 'Dumai, Riau', '089788899087', 'avatars/2XJ5I4hB9Hvf9h4sFJhKNMm5sFgYGv3vO36ZQTug.jpeg', 'ACTIVE'),
	(11, 'Wahyu Sandana', 'wahyu.sandana@hoscloud.id', NULL, '$2y$10$WhJq91PSe8LG2nDx3JhuW.OjfSW5RVltFKfNqmzvTPOYIkmnRSlZu', NULL, '2020-05-29 10:50:27', '2020-05-29 10:50:27', 'Wahyu', '["CUSTOMER"]', 'Palembang', '089978675554', 'avatars/lV803w1kRX4nuJ5rrw7X4iPuzrWB0uABdlSd7AaE.jpeg', 'ACTIVE'),
	(14, 'Iqbal Perdana', 'iqbal.perdana@hoscloud.id', NULL, '$2y$10$Es4LbB7NpjM0FL.TQzyABOAHb59kKWeRwJQR/ut5zkSOTVnK5Zqzi', NULL, '2020-05-29 10:52:09', '2020-05-29 10:52:09', 'Iqbal', '["STAFF"]', 'Dumai, Riau', '082345678901', 'avatars/ohzojee2Yxxh3ETEmaE2mnPKfmPEB7MP7a6xWs9c.jpeg', 'ACTIVE');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
