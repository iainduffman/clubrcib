CREATE TABLE `wp_users` (  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',  `user_status` int(11) NOT NULL DEFAULT '0',  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',  PRIMARY KEY (`ID`),  KEY `user_login_key` (`user_login`),  KEY `user_nicename` (`user_nicename`),  KEY `user_email` (`user_email`)) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40000 ALTER TABLE `wp_users` DISABLE KEYS */;
SET FOREIGN_KEY_CHECKS = 0;
SET UNIQUE_CHECKS = 0;
INSERT INTO `wp_users` VALUES('1', 'admin', '$P$BFPzYHLu5ZckYG/YKDgVXjP0eO/foF0', 'admin', 'iain@iduff.co', '', '2019-03-13 07:26:52', '', '0', 'admin');
INSERT INTO `wp_users` VALUES('2', 'hogtronix', '$P$BcEqkk.E5OkZsZ7tA/ycqruxRiGje41', 'hogtronix', 'russell.hogg@hogtronix.com', '', '2019-07-30 10:10:59', '1564481460:$P$BDXWGfR5zhEUnaK0TairYdF5MOcIOF/', '0', 'Russ Hogg');
INSERT INTO `wp_users` VALUES('3', 'sbyr-rcib-admin', '$P$BVvZVSrpz6PHv.ClyXhe1122u3VfrQ1', 'sbyr-rcib-admin', 'SimonByrne@rcib.co.uk', '', '2019-09-26 11:56:56', '', '0', 'Simon Byrne');
/*!40000 ALTER TABLE `wp_users` ENABLE KEYS */;
SET FOREIGN_KEY_CHECKS = 1;
SET UNIQUE_CHECKS = 1;