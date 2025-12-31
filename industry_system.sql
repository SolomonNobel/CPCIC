SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

SET NAMES utf8mb4;

-- --------------------------------------------------------
-- Database: industry_system
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `industry_system`;
USE `industry_system`;

-- --------------------------------------------------------
-- Table: industries
-- --------------------------------------------------------

CREATE TABLE `industries` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `industry_name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `industries` (`id`, `industry_name`) VALUES
(1, 'Energy'),
(2, 'Water');

-- --------------------------------------------------------
-- Table: industry_data
-- --------------------------------------------------------

CREATE TABLE `industry_data` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `industry_id` INT(11) NOT NULL,
  `company_name` VARCHAR(150),
  `area` VARCHAR(100),
  `metric` VARCHAR(255),
  `unit` VARCHAR(100),
  `qty_2022` INT(11),
  `qty_2023` INT(11),
  `qty_2024` INT(11),
  `remarks` VARCHAR(255),
  `latitude` DECIMAL(10,7),
  `longitude` DECIMAL(10,7),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_industry`
    FOREIGN KEY (`industry_id`)
    REFERENCES `industries` (`id`)
    ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `industry_data`
(`industry_id`, `company_name`, `area`, `metric`, `unit`,
 `qty_2022`, `qty_2023`, `qty_2024`, `remarks`, `latitude`, `longitude`)
VALUES
(2, 'Green Water Co', 'Water Usage', 'Total water consumption', 'Cubic meters', 30, 40, 50, 'Good', NULL, NULL),
(1, NULL, 'asd', '2345t', '2000kg', 40, 50, 100, 'Average', -2.2636240, 30.1574710),
(2, NULL, 'nyamata', '2345t', 'QWE', 40, 50, 70, 'Good', -2.4721860, 29.8663330),
(1, NULL, 'NYARUGURU', '2500', '2000kg', 100, 100, 100, 'Excellent', -2.0220940, 30.0640870),
(2, NULL, 'INYANGE', '2500', '3123', 12, 12, 12, 'Low', -2.0056250, 29.7564700),
(1, NULL, 'INYANGE', '2500', '2000kg', 50, 45, 12, 'Declining', -1.8364620, 30.1464840);

-- --------------------------------------------------------
-- Table: sustainability_data
-- --------------------------------------------------------

CREATE TABLE `sustainability_data` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `company_name` VARCHAR(150) NOT NULL,
  `area` VARCHAR(100) NOT NULL,
  `metric` VARCHAR(255) NOT NULL,
  `unit` VARCHAR(100) NOT NULL,
  `val_2022` INT(11),
  `val_2023` INT(11),
  `val_2024` INT(11),
  `remarks` VARCHAR(255),
  `latitude` DECIMAL(10,7),
  `longitude` DECIMAL(10,7),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `sustainability_data`
(`company_name`, `area`, `metric`, `unit`,
 `val_2022`, `val_2023`, `val_2024`, `remarks`, `latitude`, `longitude`)
VALUES
('Berwa', 'Energy Usage', 'Total energy consumption', 'KWH', 45, 50, 55, 'Stable', -1.9500000, 30.0580000),
('minute', 'Energy Usage', 'Total energy consumption', 'q', 11, 12, 12, 'Low', NULL, NULL),
('nyandungu', 'Water Usage', '2345t', '2000kg', 34, 54, 63, 'Improving', -1.9423200, 30.0228880),
('marawid', 'Raw Materials', 'Total energy consumption', 'KWH', 100, 100, 86, 'Slight drop', -1.6568160, 29.8141480),
('solomon', 'Energy Usage', '2500', '2000kg', 89, 23, 3, 'Critical', -2.5994340, 29.0396120),
('magerwa', 'Energy Usage', '2500', '2000kg', 56, 34, 34, 'Declining', -2.1713400, 30.5117800),
('masaka', 'Water Usage', 'eywuwud', '3424', 70, 96, 100, 'Excellent', -2.7859960, 29.5504760);

-- --------------------------------------------------------
-- Table: users
-- --------------------------------------------------------

CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`username`, `password`)
VALUES ('user', '12'); -- ⚠ hash this in real applications

COMMIT;
