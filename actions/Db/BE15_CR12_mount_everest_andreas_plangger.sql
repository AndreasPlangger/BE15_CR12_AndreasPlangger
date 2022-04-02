-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2022 at 05:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BE15_CR12_mount_everest_andreas_plangger`
--
CREATE DATABASE IF NOT EXISTS `BE15_CR12_mount_everest_andreas_plangger` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `BE15_CR12_mount_everest_andreas_plangger`;

-- --------------------------------------------------------

--
-- Table structure for table `travel_offers`
--

CREATE TABLE `travel_offers` (
  `trekID` int(11) NOT NULL,
  `locationName` varchar(65) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(650) NOT NULL,
  `longitude` decimal(9,6) DEFAULT NULL,
  `latitude` decimal(9,6) DEFAULT NULL,
  `picture` varchar(250) DEFAULT NULL,
  `region` varchar(25) NOT NULL,
  `duration` int(2) NOT NULL,
  `difficulty` enum('easy','moderate','difficult','very difficult','extreme') NOT NULL,
  `walking_distance` int(3) NOT NULL,
  `max_altitude` int(4) NOT NULL,
  `description_detail` varchar(1950) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_offers`
--

INSERT INTO `travel_offers` (`trekID`, `locationName`, `price`, `description`, `longitude`, `latitude`, `picture`, `region`, `duration`, `difficulty`, `walking_distance`, `max_altitude`, `description_detail`) VALUES
(1004, 'Annapurna, Nepal', '5689.00', 'There are very few treks that have this aura of making you fall in love with the landscapes and bring you so close to the base of 7000 and 8000 meter peaks in such a short time, like Annapurna base camp trek. \r\nMax Altitude :- 13,550 Ft.', '28.315060', '83.523840', 'annapurnabc.jpg', 'Asia', 9, 'moderate', 70, 4100, ''),
(1006, 'Black Peak, India', '6970.00', 'One amongst the many impressive mountains in the Garhwal Himalayas, is Black Peak – the highest peak in the Saraswati Range of mountains in the Ruinsara Valley. Called Kalanag in the local dialect – named so for the uncanny resemblance of the head of the peak to the head of the black cobra – it is 6287 meters of awe-inspiring beauty.', '31.026300', '78.573240', 'blackPeak.jpg', 'Asia', 16, 'difficult', 72, 6378, ''),
(1007, 'Kashmir Great Lakes Trek, India', '4575.00', 'The trek to the Kashmir Great Lakes Trek offers a lifetime experience of vintage memories that are so wonderfully tiring. The thundering silence of the Kashmir lakes and its virgin beauty is spell bound. Apart from the lakes, even the barren milky snow clad mountains stand out in might and proud.', '34.388900', '75.118690', 'greatLakes.jpg', 'Asia', 8, 'easy', 72, 4190, 'The Kashmir Great Lakes Trek is in no need of an introductory treatise. It presents the proem in itself. You can draw a preface of it by just hearing its name. Kashmir is a wonderful place and if you are on a himalayan trek you are bound to taste the natural beauty and adventure. The trek to the Kashmir Great Lakes Trek offers a lifetime experience of vintage memories that are so wonderfully tiring. The thundering silence of the Kashmir lakes and its virgin beauty is spell bound. Apart from the lakes, even the barren milky snow clad mountains stand out in might and proud.\r\n\r\nThe location of this trek, as obvious, is Kashmir, also known as the paradise of the earth. The trek duration calculates around 7-9 days and this trek is often graded as moderate in regards to the trekking challenges. The elevation circles around 13000 feet and the distance paths approximately 63 kms. On such a fulfilling trek you will learn so much learn about yourself- in a trifecta – physically, mentally and emotionally. For a trekker, nothing can replace and prepare him for those paramount and conflicting emotions that whether his body will take so much of strain and whether he will make it or not. But the joy on reaching the destination is obvious. This trek will always be happy and a cherishing trek for the trekkers that comes in handy with a few preparations.\r\n\r\nAs the trek to the Kashmir Great Lakes Trek demands physical fitness, you must take good care of your health, shape yourself well and be fit and fine. Trekkers can train themselves by working out regularly in gym along with running, walking on incline, cycling, cross-training and stretching on a daily basis. Along with physical health mental fitness is important equally.'),
(1008, 'Nun Peak, India', '6340.00', 'Towering at an elevation of 7135 meter, this peak in Suru Valley watches over the entire Zanskar area. The higher peak in the Nun Kun massif, Mount Nuns glittering presence could be felt from the moment you set foot in Leh with the twin peaks manifesting brilliantly along the road to Kargil.', '33.982370', '76.023160', 'nunPeak_alt1.jpg\r\n', 'Asia', 19, 'difficult', 16, 7135, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel_offers`
--
ALTER TABLE `travel_offers`
  ADD PRIMARY KEY (`trekID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travel_offers`
--
ALTER TABLE `travel_offers`
  MODIFY `trekID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
