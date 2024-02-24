CREATE TABLE `salacomentarios` (
 `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `user_presente` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `user_presente_photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `msjUser` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `dateMsjs` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `HoursMsjs` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
