
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `users` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`email` varchar(255) not null,
`password` varchar(255) not null,
`type` varchar(20) not null,
);