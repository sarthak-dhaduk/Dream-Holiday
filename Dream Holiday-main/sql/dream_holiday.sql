-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 06:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream_holiday`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tour`
--

CREATE TABLE `booking_tour` (
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(14) NOT NULL,
  `tour_name` varchar(50) NOT NULL,
  `members` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

CREATE TABLE `hotel_details` (
  `no` int(11) NOT NULL,
  `tourname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `hotel` varchar(30) NOT NULL,
  `night` int(10) NOT NULL,
  `reach_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details_create_tour`
--

CREATE TABLE `hotel_details_create_tour` (
  `id` int(11) NOT NULL,
  `organizer` varchar(100) NOT NULL,
  `tour_name` varchar(100) NOT NULL,
  `date_sdu` date NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `one_room` int(11) NOT NULL,
  `hotel_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `main_tour_data`
--

CREATE TABLE `main_tour_data` (
  `tour_name` varchar(50) NOT NULL,
  `category` varchar(200) NOT NULL,
  `totel_members` int(10) NOT NULL,
  `tour_photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_tour_data`
--

INSERT INTO `main_tour_data` (`tour_name`, `category`, `totel_members`, `tour_photo`) VALUES
('Dubai', 'international', 15, '625d57b4290f1Tour2.jpg'),
('Galapagos-Cruise', 'international, Cruise, Sea Side', 15, '625d576dd54bdTour1.jpg'),
('Goa', 'national, sea side', 15, '625d580e9b226Tour4.jpg'),
('Gujrat', 'national', 15, '625d57e4dd385Tour3.jpg'),
('Trekking-Kasmir', 'Trekking, national', 15, '625d58653b975Tour6.jpg'),
('Trekking-Manali', 'Trekking, national', 15, '625d583f66413Tour5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `normal_data_tour`
--

CREATE TABLE `normal_data_tour` (
  `tour_name` varchar(50) NOT NULL,
  `departure_date` date NOT NULL,
  `departure_time` time NOT NULL,
  `departure_place` varchar(50) NOT NULL,
  `return_date` date NOT NULL,
  `return_time` time NOT NULL,
  `return_place` varchar(50) NOT NULL,
  `pricing` varchar(10) NOT NULL,
  `pricing_status` varchar(50) NOT NULL,
  `days` int(10) NOT NULL,
  `select_tage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normal_data_tour`
--

INSERT INTO `normal_data_tour` (`tour_name`, `departure_date`, `departure_time`, `departure_place`, `return_date`, `return_time`, `return_place`, `pricing`, `pricing_status`, `days`, `select_tage`) VALUES
('Dubai', '2022-04-16', '09:02:00', 'surat', '2022-04-29', '10:00:00', 'surat', '$1000', 'Approx', 20, 'New Tours'),
('Galapagos-Cruise', '2023-10-30', '07:10:00', 'Mumbai', '2023-11-10', '07:00:00', 'Mumbai', '$90', 'Approx', 10, 'New Tours'),
('Goa', '2023-10-30', '07:10:00', 'Mumbai', '2023-11-10', '07:00:00', 'Mumbai', '$95', 'Approx', 10, 'New Tours'),
('Gujrat', '2023-10-30', '07:10:00', 'Mumbai', '2023-11-10', '07:00:00', 'Mumbai', '$70', 'Approx', 10, 'New Tours'),
('hii', '2022-12-01', '23:00:00', 'rajkot', '2022-12-01', '23:59:00', 'Manavadar', '$95', 'Approx', 10, 'international'),
('Trekking-Kasmir', '2023-10-30', '07:10:00', 'Mumbai', '2023-11-10', '07:00:00', 'Mumbai', '$100', 'Approx', 10, 'New Tours'),
('Trekking-Manali', '2023-10-30', '07:10:00', 'Mumbai', '2023-11-10', '07:00:00', 'Mumbai', '$85', 'Approx', 10, 'New Tours');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tourname` varchar(100) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(12) NOT NULL,
  `user` varchar(35) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `email`, `password`, `user`, `gender`, `token`) VALUES
('jankimam', 'janki.kansagra@rku.ac.in', '0123456', 'creater', 'femal', '6266d137ce0d9'),
('nishamam', 'nisha.kukadiya@rku.ac.in', '123456789', 'user', 'femal', '6266d182a1bf2'),
('Sarthak', 'sarthakdhaduk1111@gmail.com', '123', 'admin', 'male', '626419b45d264');

-- --------------------------------------------------------

--
-- Table structure for table `review_rating`
--

CREATE TABLE `review_rating` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tour` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tour_creater`
--

CREATE TABLE `tour_creater` (
  `organizer_name` varchar(50) NOT NULL,
  `tour_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(13) NOT NULL,
  `departure` date NOT NULL DEFAULT current_timestamp(),
  `departure_which_place` varchar(50) NOT NULL,
  `date_return` date NOT NULL DEFAULT current_timestamp(),
  `return_which_place` varchar(50) NOT NULL,
  `total_members` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tour`
--
ALTER TABLE `booking_tour`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`contact_number`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `hotel_details_create_tour`
--
ALTER TABLE `hotel_details_create_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_tour_data`
--
ALTER TABLE `main_tour_data`
  ADD PRIMARY KEY (`tour_name`),
  ADD UNIQUE KEY `tour_photo` (`tour_photo`);

--
-- Indexes for table `normal_data_tour`
--
ALTER TABLE `normal_data_tour`
  ADD PRIMARY KEY (`tour_name`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `review_rating`
--
ALTER TABLE `review_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_creater`
--
ALTER TABLE `tour_creater`
  ADD PRIMARY KEY (`organizer_name`),
  ADD UNIQUE KEY `t_name` (`tour_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `c_number` (`contact_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_details_create_tour`
--
ALTER TABLE `hotel_details_create_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `review_rating`
--
ALTER TABLE `review_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
