-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 09:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solartec`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `ban_id` int(11) NOT NULL,
  `ban_title` varchar(200) NOT NULL,
  `ban_subtitle` varchar(250) NOT NULL,
  `ban_button` varchar(50) NOT NULL,
  `ban_url` varchar(50) NOT NULL,
  `ban_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`ban_id`, `ban_title`, `ban_subtitle`, `ban_button`, `ban_url`, `ban_image`) VALUES
(6, '\"Shining a Brighter Future: The Solartec Revolution\"', '\"Unleashing Solar Energy for a Cleaner World\"', 'read more', 'https://www.youtube.com/@solartecenergiasolar2887', 'banner_1697181517_959617.jpg'),
(9, '\"Our Journey in Solar Excellence\"', '\"Leading the Charge in Renewable Energy Innovation\"', 'read more', 'https://www.youtube.com/watch?v=oVTnSqRwqg8', 'banner_1697182469_904624.jpg'),
(10, '\"Powering Tomorrow: Solartec Innovation\"', '\"Harnessing the Suns Energy for a Sustainable Future\"', 'read more', 'https://www.youtube.com/watch?v=oVTnSqRwqg8', 'banner_1697182637_925919.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(50) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_subject` varchar(50) NOT NULL,
  `con_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_name`, `con_email`, `con_subject`, `con_message`) VALUES
(4, 'Rehana Kabir Mim', 'rehanakabirmim@gmail.com', 'CSE', 'Computer Science &amp;  Engineering ');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'author'),
(4, 'subscriber'),
(5, 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_details` text NOT NULL,
  `service_icon` varchar(100) NOT NULL,
  `service_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_title`, `service_details`, `service_icon`, `service_image`) VALUES
(5, '  Solar Maintenance and Repairs', 'Ensure the longevity and reliability of your solar system with our maintenance and repair services. We offer regular check-ups, cleaning, and prompt repairs to maximize your solar investments performance and efficiency.', '	fa fa-solar-panel', 'service_1697183142_903925.jpg'),
(6, ' Solar Energy Consultation', ' Get personalized guidance from our solar energy experts to determine the best solar solutions for your specific needs. We provide comprehensive assessments, energy efficiency audits, and financial analyses to help you make informed decisions.', '	fa fa-solar-panel', 'service_1697183041_783525.jpg'),
(7, '  Solar Panel Installation', ' Our expert team specializes in the efficient installation of high-quality solar panels, ensuring optimal energy capture and seamless integration with your property. We offer tailored solutions for residential, commercial, and industrial clients.', 'fa fa-address-book', 'service_1697182991_734859.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_designation` varchar(50) NOT NULL,
  `member_facebook` varchar(100) NOT NULL,
  `member_twitter` varchar(100) NOT NULL,
  `member_instragram` varchar(100) NOT NULL,
  `member_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`member_id`, `member_name`, `member_designation`, `member_facebook`, `member_twitter`, `member_instragram`, `member_photo`) VALUES
(1, 'Team_Member1', '       Ipsam exercitationem', 'fab fa-facebook', 'fab fa-twitter', 'fab fa-instagram', 'team_1697183472_678698.jpg'),
(3, 'Team_Member2', '     Consectetur quisqua', 'fab fa-facebook', ' fab fa-twitter', 'fab fa-instagram', 'team_1697183447_185989.jpg'),
(4, 'Team_Member3', '  Dolorem sunt ex moll', 'fab fa-facebook', ' fab fa-twitter', 'fab fa-instagram', 'team_1697183503_693397.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_email` varchar(30) DEFAULT NULL,
  `user_username` varchar(50) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_photo` varchar(50) DEFAULT NULL,
  `user_slug` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_password`, `role_id`, `user_photo`, `user_slug`) VALUES
(1, 'Rehana Kabir Mim', '01795913294', 'rehanakabirmim@gmail.com', 'mim', 'c20ad4d76fe97759aa27a0c99bff6710', 1, '', '  U652b8ece6f20b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
