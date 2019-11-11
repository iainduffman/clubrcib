CREATE TABLE `wp_wpfm_backup` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `backup_name` text COLLATE utf8mb4_unicode_520_ci,  `backup_date` text COLLATE utf8mb4_unicode_520_ci,  PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40000 ALTER TABLE `wp_wpfm_backup` DISABLE KEYS */;
SET FOREIGN_KEY_CHECKS = 0;
SET UNIQUE_CHECKS = 0;
/*!40000 ALTER TABLE `wp_wpfm_backup` ENABLE KEYS */;
SET FOREIGN_KEY_CHECKS = 1;
SET UNIQUE_CHECKS = 1;
