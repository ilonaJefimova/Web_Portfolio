-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2021 at 04:07 AM
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
-- Database: `block4`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(40) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `link`) VALUES
(1, 'When will the Edinburgh Christmas markets end and what are the festive opening times 2021', 'The Edinburgh Christmas markets are open and attracting locals and visitors alike. Edinburgh Christmas 2021 has turned the city into a winter wonderland with markets, food stalls, a Santa Land and attractions throughout the city centre.  For the first time since 2018, Edinburgh has welcomed back an outdoor ice rink.', '1.jpg', 'https://www.edinburghlive.co.uk/best-in-edinburgh/edinburgh-christmas-markets-end-what-22379738'),
(2, 'Edinburgh hoteliers  very encouraged  about prospects for bumper Hogmanay period', 'The Edinburgh Hotels Association, which represents more than 50 of the capitals leading establishments, said its members were forecasting bookings to be in line with 2019, with a last-minute surge anticipated. Leading hotels are charging more than Â£900 a room due to the current levels of demand for a two night stay over Hogmanay.  Organisers of the Hogmanay festival, which is expected to attract more than 30,000 revellers into the city centre, said more than half of the available tickets had been snapped up, with no drop off in sales since news about the Omicron variant emerged.', '2.png', 'https://www.edinburghnews.scotsman.com/whats-on/arts-and-entertainment/edinburgh-hoteliers-very-encouraged-about-prospects-for-bumper-hogmanay-period-3482194'),
(3, 'Sara Sheridan to give talk on Edinburgh-set historical novel at the Botanics', 'The old whisky distillery on Glenogle Road, the Water of Leith and Tanfield all get a mention although most of the mischief occurs in the Botanics itself.  Edinburgh based writer Sheridan has been writing both fiction and creative non fiction for more than 20 years and has been named one of the Saltire Societys 365 Most Influential Scottish Women past and present.', '3.jpg', 'https://www.edinburghnews.scotsman.com/news/people/sara-sheridan-to-give-talk-on-edinburgh-set-historical-novel-at-the-botanics-3481952'),
(4, 'Edinburgh Kings panto: Sleeping Beauty is a dazzling five star extravaganza', 'You wont find a more spectacular panto anywhere than the Edinburgh Kings Sleeping Beauty, a dazzling five star extravaganza of love, laughter and everything we have come to expect from the best pantomime in the land.', '4.jpg', 'https://www.edinburghnews.scotsman.com/whats-on/arts-and-entertainment/edinburgh-kings-panto-sleeping-beauty-is-a-dazzling-five-star-extravaganza-3479716'),
(5, 'Edinburgh rated most dog-friendly UK destination with West Highland Terrier Hamish showing us why', 'Ever wondered what itâ€™s like to explore Scotlandâ€™s capital through a dogsâ€™ eyes? Well thanks to a new video and its star, a wee West Highland Terrier called Hamish, we have been given the chance to see the beautiful city from a pupâ€™s point of view.', '5.jpg', 'https://www.edinburghnews.scotsman.com/lifestyle/christmas/edinburgh-rated-most-dog-friendly-uk-destination-with-west-highland-terrier-hamish-showing-us-why-3480673'),
(6, 'Plan your journey: check festive timetables for Edinburgh and Lothian', 'People in Edinburgh and the Lothians are being urged to ensure they plan their journeys and check bus timetables to ensure their holiday plans run on time this festive season.', '6.jpg', 'https://www.edinburghnews.scotsman.com/news/people/plan-your-journey-check-festive-timetables-for-edinburgh-and-lothian-3478375');

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
(1, 'Admin', 'Admin', 'SuperSecretA', '$2y$10$HyY5p6xBR4YJOQDSeMCvT.6AD8w.AEjiY1v.uGrXBnqCZbmBHyTFy'),
(2, 'asd', 'asd', 'asd', '$2y$10$vLy4FQ7Q9U4vYJN8iMwUN.SZKjnCHCNf.l3pp8D5jfe2PaWv6aStS'),
(8, 'qwer', 'qwer', 'qwer', '$2y$10$o8n/P8.kI4rWku8gc.1WB.YXxAOrfn4RYmK89OuQjMwrP3ElTNowG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
