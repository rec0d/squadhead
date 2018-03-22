-- --------------------------------------------------------
-- Värd:                         127.0.0.1
-- Serverversion:                10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dbphpsearch
CREATE DATABASE IF NOT EXISTS `dbphpsearch` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbphpsearch`;

-- Dumping structure for tabell dbphpsearch.article
CREATE TABLE IF NOT EXISTS `article` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_title` varchar(256) NOT NULL,
  `a_text` text NOT NULL,
  `a_author` varchar(256) NOT NULL,
  `a_date` datetime NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumpar data för tabell dbphpsearch.article: ~2 rows (ungefär)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`a_id`, `a_title`, `a_text`, `a_author`, `a_date`) VALUES
	(1, '50 great summer recipes', 'There are many recipes', 'Admin', '2018-03-25 12:23:11'),
	(2, 'a serial of articles', 'the view of a programmer', 'Daniel Halén', '2018-03-25 12:23:11');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
