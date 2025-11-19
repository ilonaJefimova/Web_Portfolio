-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2021 at 04:05 AM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 5.4.16 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `block2`
--

-- --------------------------------------------------------

--
-- Table structure for table `sushi`
--

CREATE TABLE `sushi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sushi`
--

INSERT INTO `sushi` (`id`, `name`, `description`, `image`, `price`) VALUES
(1, 'Carrot Orange Yellowtail Roll', 'A smooth, creamy and fresh recipe where the sea bream is enhanced by the combination of avocado and carrot, topped with orange zest.', 'Sushi1.png', 7.20),
(2, 'Smoked Salmon Roll\nAdd to basket', 'A new take on a classic! Smoked salmon with green apple and beetroot, all spiced up with lime zest to give this California roll a new dimension.', 'Sushi2.png', 6.20),
(3, 'Ikura Mozza Roll', 'When the salmon roe combines with the creaminess of mozzarella and the freshness of cucumber, the result is a creation that is both tasty and surprising', 'Sushi3.png', 6.70),
(4, 'Chicken Dragon Roll', 'An icon of street food, fried chicken has been revisited to crate a Sushi version: sweet piquillo pepper, sliced avocado and a touch of spicy sauce... A real journey for your tastebuds!', 'Sushi4.png', 9.90),
(5, 'Color Fresh Roll', 'TOPPING :\nAvocado,Dried orange zest,Yogurt,Green Apple,Cumin,Chives,Tahini,Sesame\nINSIDE : Mango,Coriander,Carrot,Rocket,Red cabbage,Miso yuzu mayonnaise', 'Sushi5.png', 8.90),
(6, 'White Passion Roll', 'A colourful Signature Roll that puts yellowtail in the spotlight. Elegantly combined with mango, passion fruit and red and green peppers, be tempted by this explosion of flavours', 'Sushi6.png', 11.90);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Surname` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Name`, `Surname`, `username`, `password`) VALUES
(1, 'Admin', 'Admin', 'SuperSecretA', '$2y$10$HyY5p6xBR4YJOQDSeMCvT.6AD8w.AEjiY1v.uGrXBnqCZbmBHyTFy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sushi`
--
ALTER TABLE `sushi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sushi`
--
ALTER TABLE `sushi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
