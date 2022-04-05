-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2022 at 09:41 PM
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
(1004, 'Annapurna', '5689.00', 'There are very few treks that have this aura of making you fall in love with the landscapes and bring you so close to the base of 7000 and 8000 meter peaks in such a short time, like Annapurna base camp trek.', '83.523840', '28.315060', 'annapurnabc.jpg', 'Nepal, Asia', 9, 'moderate', 70, 4100, 'When we talk about the Annapurna Base Camp, there is a sense of admiration that starts building up which leaves every trekker spellbound. The Annapurna Base Camp trek is one of the most popular treks in the Annapurna region. The trail is a majestic one which takes you through rice paddies, lush rhododendron forests and high altitude landscapes with the Annapurna Range looming in front of you most of the times.\r\n\r\nThe Annapurna range has such stunning mountain views which are a buffet for every mountain lover. You will also be greeted with views of Machapuchare, Annapurna South and Hiunchuli even before you set foot on the trek, which is one thing that is surely a bonus for all the trekkers. Views of different peaks of the Annapurna massif and Machapuchare will always be in the sight all the way till Sinuwa.\r\n\r\nAccommodation on the Annapurna trail is organized in classic teahouses where delicious Nepali dishes are served. These tea houses are run by locals of the area who migrate from other parts of Nepal. The floral and faunal species are also found in this area which will surely amaze you. \r\n\r\n'),
(1006, 'Kalanag', '6970.00', 'One amongst the many impressive mountains in the Garhwal Himalayas, is Black Peak – the highest peak in the Saraswati Range of mountains in the Ruinsara Valley. Called Kalanag in the local dialect – named so for the uncanny resemblance of the head of the peak to the head of the black cobra – it is 6287 meters of awe-inspiring beauty.', '78.573240', '31.026300', 'blackPeak.jpg', 'India, Asia', 16, 'difficult', 72, 6378, 'Black Peak Expedition which is known as Kalanag Expedition. It is one of the best expeditions which has become most preferred expedition today. Climbing this mountain is everyones dream. It is situated in Uttarkashi district of Uttarakhand. This is connected Swargarohini peak and Bandarpoonch. The height of this peak is 6387 Meter.\r\n\r\nThe expedition starts from base camp Sankri. Ruinsara Tal and kyarkoti is the base camp of this trek. Its look like the Snake shape due to slope in front the snow does not stop. That’s why it looks black from the front. This is why it is called Kalanag peak. The Black Peak Expedition in the local dialect is known as Kala Nag it is named so because top part of this peak resembles Black Cobra.\r\n\r\nThis is the highest peak in Saraswati Mountain Range Bandarpoonch at an altitude of 6387 meters, near Ruinsara valley. Other peaks are Bandarpoonch (I) (6316 m) and Hanuman Parvat (Bandarpoonch II) (6102 m). Here together with Swargarohini and Bandarpoonch creates a beautiful mountain range. '),
(1007, 'Kashmir', '4575.00', 'The trek to the Kashmir Great Lakes Trek offers a lifetime experience of vintage memories that are so wonderfully tiring. The thundering silence of the Kashmir lakes and its virgin beauty is spell bound. Apart from the lakes, even the barren milky snow clad mountains stand out in might and proud.', '75.118690', '34.388900', 'greatLakes.jpg', 'India, Asia', 8, 'easy', 72, 4190, 'The Kashmir Great Lakes Trek is in no need of an introductory treatise. It presents the proem in itself. You can draw a preface of it by just hearing its name. Kashmir is a wonderful place and if you are on a himalayan trek you are bound to taste the natural beauty and adventure. The trek to the Kashmir Great Lakes Trek offers a lifetime experience of vintage memories that are so wonderfully tiring. The thundering silence of the Kashmir lakes and its virgin beauty is spell bound. Apart from the lakes, even the barren milky snow clad mountains stand out in might and proud.\r\n\r\nThe location of this trek, as obvious, is Kashmir, also known as the paradise of the earth. The trek duration calculates around 7-9 days and this trek is often graded as moderate in regards to the trekking challenges. The elevation circles around 13000 feet and the distance paths approximately 63 kms. On such a fulfilling trek you will learn so much learn about yourself- in a trifecta – physically, mentally and emotionally. For a trekker, nothing can replace and prepare him for those paramount and conflicting emotions that whether his body will take so much of strain and whether he will make it or not. But the joy on reaching the destination is obvious. This trek will always be happy and a cherishing trek for the trekkers that comes in handy with a few preparations.\r\n\r\nAs the trek to the Kashmir Great Lakes Trek demands physical fitness, you must take good care of your health, shape yourself well and be fit and fine. Trekkers can train themselves by working out regularly in gym along with running, walking on incline, cycling, cross-training and stretching on a daily basis. Along with physical health mental fitness is important equally.'),
(1008, 'Nun', '6340.00', 'Towering at an elevation of 7135 meter, this peak in Suru Valley watches over the entire Zanskar area. The higher peak in the Nun Kun massif, Mount Nuns glittering presence could be felt from the moment you set foot in Leh with the twin peaks manifesting brilliantly along the road to Kargil.', '76.023160', '33.982370', 'nunPeak_alt1.jpg\r\n', 'India, Asia', 19, 'difficult', 16, 7135, 'To mount this peak is a task for darers with true grit. Intensive glacial formations, icefall slopes, thoroughly crevassed surfaces, knife-edge cliffs, vertical ice walls, and unpredictable weather beset the expedition to Nun with thrills of a thousand kinds.\r\nOn your arrival in Leh, you can start exploring monasteries and remains of the ancient Himalayan culture of this place. Pay a visit to Shey Palace in Ladakhs previous summer capital, the monasteries Sangam, Thiksey, and Hemis to expand your cultural outlook and also to gain acclimatization points. The drive to Kargil in the next phase by NH 1 or the Leh-Srinagar highway will open up a panorama of cold desert hues contrasting against the ice peaks of the Zanskar Range. The incomparable beauty of the fertile Suru Valley amidst the cold desert in passing will be a picture to remember.\r\n\r\nIn the Upper Suru Valley, the Nun-Kun massif overlooks the skyline- the highest peaks in the Zanskar range of Ladakh the Kun peak being the lesser of the two at 7076 meters. A trenched plateau separates the two peaks, extending to about 4 km. This is one of the key areas when climbing the Nun-Kun peaks jointly. Glittering closely high up near this great massif is the Pinnacle Peak of a height of 6911 meters.\r\n\r\nOffering a varying degree of difficulty, this herculean expedition has all aspects of serious technical climbing thrown in—fixed roping, using ice axe in front point climb, climbing with ascender-descender, carabineers, snow stakes or anchors, snow pickets, and other things. Fitness training and psychological preparation will go a long way in this project and it is highly necessary that you have substantial experience in mountain climbing before embarking on this stupendous high altitude journey.');

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
  MODIFY `trekID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
