-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for travelapp
/*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `u927545431_desaalamendah`;

-- Dumping structure for table travelapp.achievements
CREATE TABLE IF NOT EXISTS `achievements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.achievements: ~0 rows (approximately)

-- Dumping structure for table travelapp.activities
CREATE TABLE IF NOT EXISTS `activities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.activities: ~0 rows (approximately)

-- Dumping structure for table travelapp.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.admins: ~2 rows (approximately)
INSERT INTO `admins` (`id`, `user_id`, `isAdmin`, `position`, `img`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, NULL, NULL, '2024-09-03 10:09:42', '2024-09-03 10:09:42'),
	(3, 3, 0, NULL, NULL, '2024-09-03 10:26:47', '2024-09-03 10:26:47');

-- Dumping structure for table travelapp.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.articles: ~0 rows (approximately)

-- Dumping structure for table travelapp.authors
CREATE TABLE IF NOT EXISTS `authors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `article_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.authors: ~0 rows (approximately)

-- Dumping structure for table travelapp.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table travelapp.galleries
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `article_id` bigint unsigned NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.galleries: ~0 rows (approximately)

-- Dumping structure for table travelapp.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_08_03_072812_create_pakets_table', 1),
	(6, '2024_08_03_074221_create_activities_table', 1),
	(7, '2024_08_03_074716_create_articles_table', 1),
	(8, '2024_08_03_074847_create_subarticles_table', 1),
	(9, '2024_08_03_075422_create_paket_activities_table', 1),
	(10, '2024_08_03_104231_create_authors_table', 1),
	(11, '2024_08_06_130354_create_verifiedaccounts_table', 1),
	(12, '2024_08_08_152937_create_qnas_table', 1),
	(13, '2024_08_09_204707_create_admins_table', 1),
	(14, '2024_08_09_205416_create_achievements_table', 1),
	(15, '2024_08_14_185545_create_promocodes_table', 1),
	(16, '2024_08_22_060805_create_packetoptions_table', 1),
	(17, '2024_08_27_190808_create_galleries_table', 1);

-- Dumping structure for table travelapp.packetoptions
CREATE TABLE IF NOT EXISTS `packetoptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `paket_id` bigint unsigned NOT NULL,
  `price` int NOT NULL,
  `minimum_person` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.packetoptions: ~0 rows (approximately)

-- Dumping structure for table travelapp.pakets
CREATE TABLE IF NOT EXISTS `pakets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.pakets: ~0 rows (approximately)

-- Dumping structure for table travelapp.paket_activities
CREATE TABLE IF NOT EXISTS `paket_activities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `paket_id` bigint unsigned NOT NULL,
  `activity_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.paket_activities: ~0 rows (approximately)

-- Dumping structure for table travelapp.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table travelapp.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table travelapp.promocodes
CREATE TABLE IF NOT EXISTS `promocodes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_percent` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.promocodes: ~0 rows (approximately)

-- Dumping structure for table travelapp.qnas
CREATE TABLE IF NOT EXISTS `qnas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.qnas: ~5 rows (approximately)
INSERT INTO `qnas` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
	(1, 'What is Alamendah Village?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!', '2024-09-03 10:08:42', '2024-09-03 10:08:42'),
	(2, 'Where is Alamendah Village located?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!', '2024-09-03 10:08:42', '2024-09-03 10:08:42'),
	(3, 'How can I get to Alamendah Village?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!', '2024-09-03 10:08:42', '2024-09-03 10:08:42'),
	(4, 'What types of accomodations are available in Alamendah?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!', '2024-09-03 10:08:42', '2024-09-03 10:08:42'),
	(5, 'Are there any restaurants or dining options in Alamendah?', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!', '2024-09-03 10:08:42', '2024-09-03 10:08:42');

-- Dumping structure for table travelapp.subarticles
CREATE TABLE IF NOT EXISTS `subarticles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `article_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.subarticles: ~0 rows (approximately)

-- Dumping structure for table travelapp.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isOnline` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `telephone`, `address`, `isOnline`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Abdullah Ahmad Hafiz', 'abdamadhafiz13@gmail.com', NULL, '$2y$12$W7pQDtACbuAVki9wNuXcnu3aQAYxIAEtVoNgwgrFDjUCU50VoTrJW', '085162784180', 'Jalan Bang Pitung No.309A, Grogol Utara, Kebayoran Lama', 1, NULL, '2024-09-03 10:09:42', '2024-09-03 10:10:48'),
	(3, 'Abdullah Ahmad Hasby', 'hafizsecond635@gmail.com', NULL, '$2y$12$slMErOS2JhWuxHiPmHgcWum8wPW0GS6HMaooBWqGkvGKFxYBFUHbW', '081265640990', 'Jalan Kerajinan No.9', 0, NULL, '2024-09-03 10:26:47', '2024-09-03 10:27:46');

-- Dumping structure for table travelapp.verifiedaccounts
CREATE TABLE IF NOT EXISTS `verifiedaccounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isVerified` tinyint(1) NOT NULL,
  `isChanged` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table travelapp.verifiedaccounts: ~2 rows (approximately)
INSERT INTO `verifiedaccounts` (`id`, `user_id`, `token`, `isVerified`, `isChanged`, `created_at`, `updated_at`) VALUES
	(1, 1, '517b6004204d08ed7b0f0e4323f5628a1b74ba5e0b521c674c25259babc444c4', 1, 1, '2024-09-03 10:09:42', '2024-09-03 10:10:12'),
	(3, 3, '2a92d293cd283e5a25e7b9a3d394f99d7a3a29ad3ed1bcc8516f92976ccb22e4', 1, 1, '2024-09-03 10:26:47', '2024-09-03 10:27:08');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
